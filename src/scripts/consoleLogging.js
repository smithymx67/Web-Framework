/**
 * Log text to the console
 * @param {string} message
 * @param {string} style
 **/
function consoleLog(message, style) {
  switch(style) {
    case "info":
      console.log("%c" + message, "color: blue");
      break;
    case "success":
      console.log("%c" + message, "color: green");
      break;
    case "warning":
      console.log("%c" + message, "color: orange");
      break;
    case "danger":
      console.log("%c" + message, "color: red");
      break;
    default:
      console.log(message);
  }
}