//Português
$(function() {
    $(".lang-kh").click(function() {
        //cabeçalho
        $(".navbar-nav").children().eq(0).text("ទំព័រដើម");
        $(".navbar-nav").children().eq(1).text("អំពីយើង");
        $(".navbar-nav").children().eq(2).text("សេវាកម្ម");
        $(".navbar-nav").children().eq(4).text("ទំនាក់ទំនង");
        $(".lang").text("KH");
        $(".lang").removeClass("change-en");
        $(".lang").removeClass("change-cn");
        $(".lang").addClass("change-kh");
        //seção
        $("#title").text("Uma Webpage simples com opção de Milti-language");
        //sobre
        $(".page").children().eq(0).text("ក្រុមយើង");
        $("#dropdown-page").text("ទំព័រ");
        $(".about-container ul:nth-child(1) li:nth-child(2) a").text("Visão Geral");
        $(".about-container ul:nth-child(1) li:nth-child(3) a").text("Pagamentos");
        $(".about-container ul:nth-child(2) li:nth-child(1) a").text("Suporte");
        $(".about-container ul:nth-child(2) li:nth-child(2) a").text("Central de Ajuda");
        $(".about-container ul:nth-child(2) li:nth-child(3) a").text("Termos e Políticas");
    });
});

//English
$(function() {
    $(".lang-en").click(function() {
        //header
        $(".navbar-nav").children().eq(0).text("Home");
        $(".navbar-nav").children().eq(1).text("About");
        $(".navbar-nav").children().eq(2).text("Service");
        $(".navbar-nav").children().eq(4).text("Contact");
        $(".lang").text("EN");
        $(".lang").removeClass("change-cn");
        $(".lang").removeClass("change-kh");
        $(".lang").addClass("change-en");
        //section
        $("#title").text("A simple webpage with Milti-language option");
        //About
        $(".page").children().eq(0).text("Our Team");
        $("#dropdown-page").text("Pages");
        // $(".page").children().eq(1).text("Ethics Line");
        // $(".page").children().eq(2).text("Payments");
        $(".about-container ul:nth-child(2) li:nth-child(1) a").text("Support");
        $(".about-container ul:nth-child(2) li:nth-child(2) a").text("Help Center");
        $(".about-container ul:nth-child(2) li:nth-child(3) a").text("Terms and Policies");
    });
});

//Espanõl
$(function() {
    $(".lang-cn").click(function() {
        //encabezamiento
        $(".nav-menu").children().eq(0).text("Soluciones");
        $(".nav-menu").children().eq(1).text("Comunidad");
        $(".nav-menu").children().eq(2).text("Comprar");
        $(".lang").text("CN");
        $(".lang").removeClass("change-kh");
        $(".lang").removeClass("change-en");
        $(".lang").addClass("change-cn");
        //sección
        $("#title").text("Una página web sencilla con la opción de Multi-language");
        //sobre
        $(".about-container ul:nth-child(1) li:nth-child(1) a").text("Soluciones");
        $(".about-container ul:nth-child(1) li:nth-child(2) a").text("Visión General");
        $(".about-container ul:nth-child(1) li:nth-child(3) a").text("Pagos");
        $(".about-container ul:nth-child(2) li:nth-child(1) a").text("Soporte");
        $(".about-container ul:nth-child(2) li:nth-child(2) a").text("Central de Ayuda");
        $(".about-container ul:nth-child(2) li:nth-child(3) a").text("Términos y Políticas");
    });
});