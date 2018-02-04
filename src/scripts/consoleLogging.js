var consoleLog = (function () {
  function normal (message)   {console.log(message);}
  function info (message)     {console.log("%c" + message, "color: blue");}
  function success (message)  {console.log("%c" + message, "color: green");}
  function warning (message)  {console.log("%c" + message, "color: orange");}
  function danger (message)   {console.log("%c" + message, "color: red");}

  return {
    normal:   function (message)  { return normal(message) },
    info:     function (message)  { return info(message) },
    success:  function (message)  { return success(message) },
    warning:  function (message)  { return warning(message) },
    danger:   function (message)  { return danger(message) }
  }
}) ();