<div class="container-fluid bg-light border">
    <div class="container clearfix">
        <div class="btn-group float-end p-2">
        <button class="btn btn-default btnView bg-white" attr-type="grid" attr-index ="3">
                <i class="fas fa-th fa-xs pe-1"></i>
                <span class="col-xs-0 float-end small mt-1">GRID</span>
            </button>
            <button class="btn btn-default btnView" attr-type="list" attr-index ="3">
                <i class="fas fa-list fa-xs pe-1"></i>
                <span class="col-xs-0 float-end small mt-1">LIST</span>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="container">
        <div class="clearfix pt-3 pb-0 px-2">
            <h4 class="float-start text-uppercase pt-2">Articulos más vendido</h4>
            <span class="float-end">
                <a href="#" class="btn btn-default templateColor">
                    <small>VER MÁS <i class="fas fa-chevron-right"></i></small>
                </a>

            </span>
        </div>
        <hr style="color:#666">
        <!--GRID -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 pt-3 pb-4 grid-3">
            <div class="col px-3 py-2 py-lg-0">
                <a href="#">
                    <figure class="imgProduct">
                        <img src="<?php echo $path ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid">
                    </figure>
                    <h5><small class="text-uppercase text-muted">Curso de php</small></h5>
                </a>
                <h6>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                </h6>
                <div class="clearfix">
                    <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                    <span class="float-end">
                        <div class="btn-group btn-group-sm">
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col px-3 py-2 py-lg-0">
                <a href="#">
                    <figure class="imgProduct">
                        <img src="<?php echo $path ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid">
                    </figure>
                    <h5><small class="text-uppercase text-muted">curso de jquery</small></h5>
                </a>
                <h6>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                </h6>
                <div class="clearfix">
                    <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                    <span class="float-end">
                        <div class="btn-group btn-group-sm">
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col px-3 py-2 py-lg-0">
                <a href="#">
                    <figure class="imgProduct">
                        <img src="<?php echo $path ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid">
                    </figure>
                    <h5><small class="text-uppercase text-muted">curso de bootstrap</small></h5>
                </a>
                <h6>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                </h6>
                <div class="clearfix">
                    <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                    <span class="float-end">
                        <div class="btn-group btn-group-sm">
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col px-3 py-2 py-lg-0">
                <a href="#">
                    <figure class="imgProduct">
                        <img src="<?php echo $path ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid">
                    </figure>
                    <h5><small class="text-uppercase text-muted">curso de javascript</small></h5>
                </a>
                <h6>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                </h6>
                <div class="clearfix">
                    <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                    <span class="float-end">
                        <div class="btn-group btn-group-sm">
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button type="buttom" class="btn btn-light border">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <!--LIST-->
        <div class="row list-3" style="display:none">
            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid" style="width: 150px;">
                </figure>
                <div class="media-body ps-3">
                    <h5><small class="text-uppercase text-muted">Curso de php</small></h5>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                    <p class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Suscipit natus, fugiat incidunt et rem in autem, quaerat aspernatur soluta iste consequuntur magni dolorum tenetur a provident veniam doloremque dolores eveniet?
                    </p>
                    <div class="clearfix">
                        <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid" style="width: 150px;">
                </figure>
                <div class="media-body ps-3">
                    <h5><small class="text-uppercase text-muted">curso de jquery</small></h5>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                    <p class="my-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod delectus, nobis molestiae dolor architecto impedit id quidem.
                        Minus nulla aliquam eaque earum exercitationem obcaecati, itaque, rem expedita molestiae iure doloremque?
                    </p>
                    <div class="clearfix">
                        <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid" style="width: 150px;">
                </figure>
                <div class="media-body ps-3">
                    <h5><small class="text-uppercase text-muted">curso de bootstrap</small></h5>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                    <p class="my-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem voluptatem,
                        accusamus accusantium aliquam fuga consequatur adipisci possimus labore non magni esse atque molestiae natus perspiciatis quas dicta provident soluta quaerat?
                    </p>
                    <div class="clearfix">
                        <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">
                <figure class="imgProduct">
                    <img src="<?php echo $path ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid" style="width: 150px;">
                </figure>
                <div class="media-body ps-3">
                    <h5><small class="text-uppercase text-muted">curso de javascript</small></h5>
                    <span class="badge badgenew bg-warning text-uppercase text-white mt-1 pt-2">Nuevo</span>
                    <p class="my-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Debitis quasi hic iure expedita quo! Magnam odio deserunt, atque fugit minus eveniet quos, repellendus cupiditate qui maiores, quod necessitatibus odit veniam.
                    </p>
                    <div class="clearfix">
                        <h5 class="float-start text-uppercase text-muted"><del class="small" style="color:#bbb">USD $29</del> $11</h5>
                        <span class="float-end">
                            <div class="btn-group btn-group-sm">
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="buttom" class="btn btn-light border">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>