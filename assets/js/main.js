// HTML TO CANVAS (Convert Image)
document.getElementById("gambar").addEventListener("click", function () {
    html2canvas(document.getElementById("kuote")).then(function (canvas) {
        var anchorTag = document.createElement("a");
        anchorTag.download = "quote_untukmu_hari_ini.jpg";
        anchorTag.href = canvas.toDataURL();
        anchorTag.target = '_blank';
        anchorTag.click();
    });
});