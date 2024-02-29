        <!-- Overlay For Sidebars -->

        <div class="overlay"></div>

<!-- Left Sidebar -->

    <aside id="leftsidebar" class="sidebar">

        <div class="navbar-brand">

            <a href="/home/">
                
                <img src="<?php echo base_url('assets') ?>/dashboard/kasir.png" style="width: 45px; height: 45px;" alt="logo_sph">
                <span class="m-l-7" style="font-size: 30px;">Kasir</span>
            
            </a>

        </div>

        <div class="menu">

            <ul class="list">

                <li>

                    <div class="user-info">
<!--                         
                        <div class="image mr-2"><img src="/assets/images/yoimiya.png" alt="User"></div> -->

                        <div class="detail">

                            <h4><?php echo ucwords(session() -> username) ?></h4>

                        </div>

                    </div>

                </li>

               
                    <li class="active"><a href="/home/user"><i class="fa-solid fa-user"></i><span>Data User</span></a></li>
                    <li class="active"><a href="/pelanggan"><i class="fa-solid fa-users"></i><span>Data Pelanggan</span></a></li>
                    <li class="active"><a href="/produk"><i class="fa-solid fa-basket-shopping"></i><span>Data Produk</span></a></li>
                    <li class="active"><a href="/kasir"><i class="fa-solid fa-cart-shopping"></i><span>Kasir</span></a></li>
                    <li class="active"><a href="/penjualan"><i class="fa-solid fa-cart-shopping"></i><span>Penjualan</span></a></li>
                    <!-- <li class="active"><a href="/home/penjualan"><i class="fa-solid fa-cart-plus"></i><span>Detail Penjualan</span></a></li> -->
                    <li class="active"><a href="/home/logout"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
            

            </ul>

        </div>

    </aside>

                     