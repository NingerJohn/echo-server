<div class="my-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>


<script type="text/javascript">
    var wsServer = 'ws://127.0.0.1:9501';
try{
    var websocket = new WebSocket(wsServer); 

}catch(err){
    console.log(err);
}

    websocket.onopen = function (evt) { 
        console.log("Connected to WebSocket server.");
    }; 

    websocket.onclose = function (evt) { 
        console.log("Disconnected"); 
    }; 

    websocket.onmessage = function (evt) { 
        console.log('Retrieved data from server: ' + evt.data); 
    }; 

    websocket.onerror = function (evt, e) {
        console.log('Error occured: ' + evt.data);
    };


</script>



