// 如果没有indexOf方法的话，则默认声明一个
if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length >>> 0;
    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;
    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}

/**
 * 关闭所有layer层
 * @author NJ 2016年09月30日16:23:02
 * @return {null} 无
 */
function closeLayer(){
  var index = parent.layer.getFrameIndex(window.name);
  parent.layer.close(index); //执行关闭
}

/**
 * ajax请求函数
 *
 * @usage用法:
 * var data = {name:value};
 * var url = '';
 * var res = ajaxRequest(url, data); // 返回结果
 * if(res.status){}else{}
 * 
 * @author NJ 2016年09月30日16:23:46
 * @param  {string} url      请求的url地址
 * @param  {string} type     请求方式，默认post
 * @param  {mixed} data     发送过去的数据
 * @param  {string} dataType 返回的数据类型
 * @return {mixed}          ajax请求返回的数据
 * 
 */
function ajaxRequest(url, data, type, dataType){
    var requestResult;
    $.ajax({
        type: (type ? type : 'POST'),                   // 提交方式默认post
        url: url,                                       // 请求的url地址
        data: (data ? data : $('form').serialize()),    // 默认form表单的所有数据
        dataType: (dataType ? dataType:'json'),         // 返回数据默认json格式
        async: false,                                   // 关闭异步，以返回数据
        success:function(res){
            requestResult = res;
        }
    })
    return requestResult; // 返回ajax请求的结果
}



function getTime(p_timestamp){
  var timestamp = Date.parse(new Date())/1000;
  var _time = timestamp-p_timestamp;

  var str = "_time";
  if(_time < 60){
      str = " "+_time+'秒前';
  }else if(_time/60 < 60){
      str = " "+Math.round(_time/60)+'分钟前';
  }else if(_time/60/60 < 24){
      str = " "+Math.round(_time/60/60)+'小时前';
  }else if(_time/60/60/24 < 30){
      str = " "+Math.round(_time/60/60/24)+'天前';
  }else if(_time/60/60/24/30 < 12){
      str = " "+Math.round(_time/60/60/24/30)+'个月前';
  } else {
      str = " 1年前";
  }
  return str;
}