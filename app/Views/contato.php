<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Metatags -->
    <?php echo view('partials/meta-tags.php'); ?>
    <title>Dom Obras - Contato</title>
    <!-- STYLES -->
    <?php echo view('partials/styles.php'); ?>
</head>

<body>
    <!--page start-->
    <div class="page">
        <!--header start-->
        <?php echo view('partials/header'); ?>
        <!--header end-->
        <!-- page-title -->
        <div class="ttm-page-title ttm-bg clearfix" style="background-image: url(./assets/images/contact.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Contato</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">
                                        <i class="themifyicon ti-home"></i> &nbsp;
                                        Home</a>
                                </span>
                                <span>Contato</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->
        <!--site-main start-->
        <div class="site-main">
            <!--form-section-->
            <section class="ttm-row form-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--section-title-->
                            <div class="section-title title-style-center_text margin_bottom30">
                                <div class="title-header">
                                    <h3>Entre em Contato</h3>
                                    <h2 class="title text-comum">Preencha o formulário abaixo</h2>
                                </div>
                            </div>
                            <!--section-title-end-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class=" ttm-bgcolor-white p-40 res-991-margin_right0 ">
                                <form id="contact_form" class=" wrap-form contact_form padding_top15" method="POST" action="envia.php">
                                    <div class="row ttm-boxes-spacing-30px">
                                        <div class="col-sm-6 ttm-box-col-wrapper">
                                            <label>
                                                <span class="text-input margin_bottom0"><input name="nome" type="text" value="" placeholder="Nome*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 ttm-box-col-wrapper">
                                            <label>
                                                <span class="text-input margin_bottom0"><input name="telefone" type="text" value="" placeholder="Telefone*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 ttm-box-col-wrapper">
                                            <label>
                                                <span class="text-input margin_bottom0"><input name="email" type="email" value="" placeholder="Email*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 ttm-box-col-wrapper">
                                            <label>
                                                <span class="text-input margin_bottom0"><input name="asssunto" type="text" value="" placeholder="Assunto*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 ttm-box-col-wrapper">
                                            <label>
                                                <span class="text-input margin_bottom0"><textarea name="mensagem" cols="40" rows="6" placeholder="Sua Mensagem" aria-required="true"></textarea></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">Enviar!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--form-section-end-->
            <!--map-section-->
            <section class="ttm-row padding_zero-section mt_100 res-991-margin_top40 res-991-margin_bottom40 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-before-content style9">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-location-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Endereço</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Av.Paulista, 1636 - Bela Vista <br> São Paulo/SP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-before-content style9 active">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-call-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Telefone</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>(11) 91410-1713</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="featured-icon-box icon-align-before-content style9">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-envelope"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Email</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>engenharia@domobras.com.br</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--map-section-end-->
            <div id="google_map" class="google_map mt_90 res-991-margin_top0">
                <div class="map_container clearfix">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.209726167078!2d-46.65840568502229!3d-23.560909984683178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceac541131%3A0x1ae2ff57f0a01035!2sAv.%20Paulista%2C%201636%20-%20Cerqueira%20C%C3%A9sar%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-200!5e0!3m2!1spt-BR!2sbr!4v1649781911612!5m2!1spt-BR!2sbr"
                            height="550" width="100"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--site-main end-->
        <!--footer start-->
        <?php echo view('partials/footer.php'); ?>
        <!--footer end-->
    </div><!-- page end -->
    <!-- Javascript -->
    <?php echo view('partials/scripts.php'); ?>
    <!-- Javascript end-->
</body>

</html>