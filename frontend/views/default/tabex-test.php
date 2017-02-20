
    <div class="container">
      <h1>
        tabex
         <small>demo</small>
      </h1>
      <p class="form-inline">
        <input id="message" type="text" placeholder="Input message here..." class="form-control">
        <button id="send" class="btn btn-default">Send text</button>
        <button id="ping" class="btn btn-default">Ping</button>
        <button id="createwin" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> new window</button>
      </p>
    </div>
    <div class="container full-height">
      <div id="log" class="full-height" style="border:1px solid lightgrey">
        
      </div>
    </div>







<script type="text/javascript">

$(function () {
  var live = tabex.client(); // create a new client

  function showmsg(msg) {
    $('#log').prepend($('<p class="message">').text(msg));
  }

  live.on('text', function(msg){
    showmsg(msg);
  });

  live.emit('text', 'New Guy is comming, node id is ' + live.__node_id__, true);

  $('#send').click(function () {
    var msg = $('#message').val();
    showmsg('<-- ' + (msg || 'empty'));
    live.emit('text', live.__node_id__ + ': ' + (msg || 'empty'));
  });

  //////////////////////////////////////////////////////////////////////////////

  // $('#createwin').click(function () {
  //   window.open(window.location.href, '_blank');
  // });

  // $('#ping').click(function () {
  //   log('<-- ping');
  //   live.emit('ping', live.__node_id__);
  // });

  // $('#send').click(function () {
  //   var msg = $('#message').val();
  //   log('<-- ' + (msg || 'empty'));
  //   live.emit('text', live.__node_id__ + ': ' + (msg || 'empty'));
  // });

  //////////////////////////////////////////////////////////////////////////////

  // live.on('ping', function (msg) { // listen ping channel
  //   log('--> ' + msg + ': ping');
  //   log('<-- pong');
  //   live.emit('pong', live.__node_id__);
  // });

  // live.on('pong', function (msg) { // listen pong channel
  //   log('--> ' + msg + ': pong');
  // });


  // live.on('text', function (msg) { // listen text channel
  //   log('--> ' + msg);
  // });

  // live.emit('text', 'node ' + live.__node_id__ + ' joined', true); // broadcast message to text channel crt client joined
});




// Do it in every browser tab, and clients become magically connected
// to common broadcast bus :)
// var live = window.tabex.client();

// live.on('channel.name', function handler(message) {
  // Do something
// });

// Broadcast message to subscribed clients in all tabs, except self.
// live.emit('channel.name2', message);

// Broadcast message to subscribed clients in all tabs, including self.
// live.emit('channel.name2', message, true);




</script>