
showTime();
function showTime() {
    dato = new Date();
    hora = dato.getHours();
    minuto = dato.getMinutes();
    segundo = dato.getSeconds();
    if (hora < 10) hora = 0 + hora;

    if (minuto < 10) minuto = "0" + minuto;

    if (segundo < 10) segundo = "0" + segundo;

    $("#HoraActual").text(hora + ":" + minuto + ":" + segundo);
    setTimeout("showTime()", 1000);
}