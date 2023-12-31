<div class="nav-cont">
    <nav>
        <div class="logo">
            <a href="./">
                <img src="./assets/Logo(1).svg" alt="">
            </a>
        </div>
        <div class="links">
            <!-- Services -->
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                    <div class="services-grid">
                        <div class="column">
                            <li class="title">Collections</li>
                            <?php include './sections/nav-components/dynamic-accounts.php' ?>
                            <?php include './sections/nav-components/reserved-accounts.php' ?>
                            <?php include './sections/nav-components/mobile-money.php' ?>
                            <?php include './sections/nav-components/cards.php' ?>
                        </div>
                        <div class="column">
                            <li class="title">Disbursment</li>
                            <?php include './sections/nav-components/single-payout.php' ?>
                            <?php include './sections/nav-components/bulk-payout.php' ?>
                            <?php include './sections/nav-components/mobile-money.php' ?>
    
                            <li class="title">Settlements</li>
                            <?php include './sections/nav-components/cross-currency.php' ?>
                            <?php include './sections/nav-components/currency-coin.php' ?>
                        </div>
                    </div>
                </ul>
            </div>
            <!-- Services -->
    
            <!-- Products -->
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                    <?php include './sections/nav-components/checkout.php' ?>
                    <?php include './sections/nav-components/payment-links.php' ?>
                    <?php include './sections/nav-components/pos.php' ?>
                    <?php include './sections/nav-components/vouchers.php' ?>
                    <?php include './sections/nav-components/in-store.php' ?>
                </ul>
            </div>
            <!-- Products -->
    
            <!-- Learn -->
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                    Learn
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                    <!-- <li><button class="dropdown-item" type="button">Checkout</button></li> -->
    
                </ul>
            </div>
            <!-- Learn -->
    
            <!-- Developers -->
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                    Developers
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                    <?php include './sections/nav-components/api-documentation.php' ?>
                    <?php include './sections/nav-components/api-status.php' ?>
                    <?php include './sections/nav-components/sandbox.php' ?>
                </ul>
            </div>
            <!-- Developers -->
    
            <!-- Pricing -->
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownServices" data-bs-toggle="dropdown" aria-expanded="false">
                    Pricing
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownServices">
                    <?php include './sections/nav-components/ng.php' ?>
                    <?php include './sections/nav-components/ks.php' ?>
                </ul>
            </div>
            <!-- Pricing -->
        </div>
    
        <div class="buttons">
            <a href="" class="cta">Create Account</a>
            <!-- <select class="country" id="country">
                <option value="">O</option>
                <option value="">O</option>
                <option value="">O</option>
            </select> -->
    
            <!-- MOBILE DROPDOWN -->
    
            <div class="dropdown mobile">
    
                <button class="hamburger btn btn-secondary dropdown-toggle" id="mobile-nav-menu" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg id="open" width="39" height="26" viewBox="0 0 39 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.0214844" y="0.893066" width="38" height="5" rx="2.5" fill="#192CD1" />
                        <rect x="0.0214844" y="10.8931" width="38" height="5" rx="2.5" fill="#192CD1" />
                        <rect x="0.0214844" y="20.8931" width="38" height="5" rx="2.5" fill="#192CD1" />
                    </svg>
    
    
                    <svg id="close" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8423 0.393188C7.31639 0.393188 0.404785 7.30479 0.404785 15.8307C0.404785 24.3566 7.31639 31.2682 15.8423 31.2682C24.3682 31.2682 31.2798 24.3566 31.2798 15.8307C31.2798 7.30479 24.3682 0.393188 15.8423 0.393188ZM13.1195 11.4285C12.6557 10.9648 11.9038 10.9648 11.4401 11.4285C10.9763 11.8922 10.9763 12.6441 11.4401 13.1079L14.1629 15.8307L11.4401 18.5535C10.9763 19.0172 10.9763 19.7691 11.4401 20.2329C11.9038 20.6966 12.6557 20.6966 13.1195 20.2329L15.8423 17.5101L18.5651 20.2329C19.0288 20.6966 19.7807 20.6966 20.2445 20.2329C20.7082 19.7691 20.7082 19.0172 20.2445 18.5535L17.5217 15.8307L20.2445 13.1079C20.7082 12.6441 20.7082 11.8922 20.2445 11.4285C19.7807 10.9648 19.0288 10.9648 18.5651 11.4285L15.8423 14.1513L13.1195 11.4285Z" fill="#192CD1" />
                    </svg>
    
                </button>
    
                <ul class="dropdown-menu mobile-nav-menu " aria-labelledby="mobile-nav-menu">
                    <!-- Collections  -->
                    <li class="title">Collections</li>
    
                    <!-- Scan to Pay -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1797 16.6682C15.1797 15.5636 16.0751 14.6682 17.1797 14.6682H21.9797C23.0843 14.6682 23.9797 15.5636 23.9797 16.6682V21.4682C23.9797 22.5728 23.0843 23.4682 21.9797 23.4682H17.1797C16.0751 23.4682 15.1797 22.5728 15.1797 21.4682V16.6682ZM17.1797 16.2682C16.9588 16.2682 16.7797 16.4473 16.7797 16.6682V21.4682C16.7797 21.6891 16.9588 21.8682 17.1797 21.8682H21.9797C22.2006 21.8682 22.3797 21.6891 22.3797 21.4682V16.6682C22.3797 16.4473 22.2006 16.2682 21.9797 16.2682H17.1797ZM25.5797 16.6682C25.5797 15.5636 26.4751 14.6682 27.5797 14.6682H32.3797C33.4843 14.6682 34.3797 15.5636 34.3797 16.6682V21.4682C34.3797 22.5728 33.4843 23.4682 32.3797 23.4682H27.5797C26.4751 23.4682 25.5797 22.5728 25.5797 21.4682V16.6682ZM27.5797 16.2682C27.3588 16.2682 27.1797 16.4473 27.1797 16.6682V21.4682C27.1797 21.6891 27.3588 21.8682 27.5797 21.8682H32.3797C32.6006 21.8682 32.7797 21.6891 32.7797 21.4682V16.6682C32.7797 16.4473 32.6006 16.2682 32.3797 16.2682H27.5797ZM18.3797 18.6682C18.3797 18.2264 18.7379 17.8682 19.1797 17.8682H19.9797C20.4215 17.8682 20.7797 18.2264 20.7797 18.6682V19.4682C20.7797 19.91 20.4215 20.2682 19.9797 20.2682H19.1797C18.7379 20.2682 18.3797 19.91 18.3797 19.4682V18.6682ZM28.7797 18.6682C28.7797 18.2264 29.1379 17.8682 29.5797 17.8682H30.3797C30.8215 17.8682 31.1797 18.2264 31.1797 18.6682V19.4682C31.1797 19.91 30.8215 20.2682 30.3797 20.2682H29.5797C29.1379 20.2682 28.7797 19.91 28.7797 19.4682V18.6682ZM15.1797 27.0682C15.1797 25.9636 16.0751 25.0682 17.1797 25.0682H21.9797C23.0843 25.0682 23.9797 25.9636 23.9797 27.0682V31.8682C23.9797 32.9728 23.0843 33.8682 21.9797 33.8682H17.1797C16.0751 33.8682 15.1797 32.9728 15.1797 31.8682V27.0682ZM17.1797 26.6682C16.9588 26.6682 16.7797 26.8473 16.7797 27.0682V31.8682C16.7797 32.0891 16.9588 32.2682 17.1797 32.2682H21.9797C22.2006 32.2682 22.3797 32.0891 22.3797 31.8682V27.0682C22.3797 26.8473 22.2006 26.6682 21.9797 26.6682H17.1797ZM25.5797 25.8682C25.5797 25.4264 25.9379 25.0682 26.3797 25.0682H27.1797C27.6215 25.0682 27.9797 25.4264 27.9797 25.8682V26.6682C27.9797 27.11 27.6215 27.4682 27.1797 27.4682H26.3797C25.9379 27.4682 25.5797 27.11 25.5797 26.6682V25.8682ZM31.9797 25.8682C31.9797 25.4264 32.3379 25.0682 32.7797 25.0682H33.5797C34.0215 25.0682 34.3797 25.4264 34.3797 25.8682V26.6682C34.3797 27.11 34.0215 27.4682 33.5797 27.4682H32.7797C32.3379 27.4682 31.9797 27.11 31.9797 26.6682V25.8682ZM18.3797 29.0682C18.3797 28.6264 18.7379 28.2682 19.1797 28.2682H19.9797C20.4215 28.2682 20.7797 28.6264 20.7797 29.0682V29.8682C20.7797 30.31 20.4215 30.6682 19.9797 30.6682H19.1797C18.7379 30.6682 18.3797 30.31 18.3797 29.8682V29.0682ZM28.7797 29.0682C28.7797 28.6264 29.1379 28.2682 29.5797 28.2682H30.3797C30.8215 28.2682 31.1797 28.6264 31.1797 29.0682V29.8682C31.1797 30.31 30.8215 30.6682 30.3797 30.6682H29.5797C29.1379 30.6682 28.7797 30.31 28.7797 29.8682V29.0682ZM25.5797 32.2682C25.5797 31.8264 25.9379 31.4682 26.3797 31.4682H27.1797C27.6215 31.4682 27.9797 31.8264 27.9797 32.2682V33.0682C27.9797 33.51 27.6215 33.8682 27.1797 33.8682H26.3797C25.9379 33.8682 25.5797 33.51 25.5797 33.0682V32.2682ZM31.9797 32.2682C31.9797 31.8264 32.3379 31.4682 32.7797 31.4682H33.5797C34.0215 31.4682 34.3797 31.8264 34.3797 32.2682V33.0682C34.3797 33.51 34.0215 33.8682 33.5797 33.8682H32.7797C32.3379 33.8682 31.9797 33.51 31.9797 33.0682V32.2682Z" fill="#192CD1" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">Scan 2 Pay</span>
                            <span class="sub">Receive payments with QR </span>
                        </div>
    
                    </li>
    
                    <!-- Payment Links -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path d="M25.9516 21.0076C26.3937 21.2188 26.8081 21.5075 27.1743 21.8736C28.9046 23.604 28.9046 26.4094 27.1743 28.1397L22.7435 32.5705C21.0132 34.3008 18.2078 34.3008 16.4774 32.5705C14.7471 30.8401 14.7471 28.0347 16.4774 26.3044L18.2074 24.5745M31.352 23.962L33.0819 22.232C34.8123 20.5017 34.8123 17.6963 33.0819 15.966C31.3516 14.2356 28.5462 14.2356 26.8159 15.966L22.3851 20.3967C20.6548 22.127 20.6548 24.9325 22.3851 26.6628C22.7513 27.029 23.1656 27.3177 23.6077 27.5288" stroke="#192CD1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">Payment Links</span>
                            <span class="sub">Make payments with links </span>
                        </div>
    
                    </li>
    
                    <!-- Dynamic Accounts  -->
                    <?php include './sections/nav-components/dynamic-accounts.php' ?>
    
    
                    <!-- Reserved Accounts  -->
                    <?php include './sections/nav-components/reserved-accounts.php' ?>
    
    
    
                    <!-- Disbursment  -->
                    <li class="title">Payout</li>
    
                    <!-- Transfer  -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path d="M16.1138 14.6979C15.856 14.6212 15.5779 14.6956 15.3896 14.8915C15.2012 15.0875 15.1331 15.3734 15.212 15.6362L17.5805 23.5203H25.8731C26.2765 23.5203 26.6035 23.8552 26.6035 24.2683C26.6035 24.6815 26.2765 25.0164 25.8731 25.0164H17.5806L15.2121 32.9002C15.1331 33.163 15.2013 33.449 15.3897 33.6449C15.578 33.8409 15.8561 33.9152 16.1139 33.8385C22.6369 31.8976 28.6946 28.8377 34.0757 24.8755C34.2665 24.7349 34.3797 24.5089 34.3797 24.2681C34.3797 24.0273 34.2665 23.8013 34.0757 23.6607C28.6946 19.6986 22.6369 16.6387 16.1138 14.6979Z" fill="#192CD1" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">Transfer</span>
                            <span class="sub">Send money out</span>
                        </div>
                    </li>
    
    
                    <!-- Agency Banking   -->
                    <li class="title">Agency Banking </li>
    
                    <!-- Agency Banking  -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="43" viewBox="0 0 49 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path d="M15.0529 17.8934C15.8462 17.1931 16.8883 16.7682 18.0297 16.7682H31.5297C32.6711 16.7682 33.7132 17.1931 34.5065 17.8934C34.3221 16.4134 33.0596 15.2682 31.5297 15.2682H18.0297C16.4997 15.2682 15.2373 16.4134 15.0529 17.8934Z" fill="#192CD1" />
                                <path d="M15.0529 20.8934C15.8462 20.1931 16.8883 19.7682 18.0297 19.7682H31.5297C32.6711 19.7682 33.7132 20.1931 34.5065 20.8934C34.3221 19.4134 33.0596 18.2682 31.5297 18.2682H18.0297C16.4997 18.2682 15.2373 19.4134 15.0529 20.8934Z" fill="#192CD1" />
                                <path d="M18.0298 21.2682C16.3729 21.2682 15.0298 22.6113 15.0298 24.2682V30.2682C15.0298 31.925 16.3729 33.2682 18.0298 33.2682H31.5298C33.1866 33.2682 34.5298 31.925 34.5298 30.2682V24.2682C34.5298 22.6113 33.1866 21.2682 31.5298 21.2682H27.7798C27.3656 21.2682 27.0298 21.604 27.0298 22.0182C27.0298 23.2608 26.0224 24.2682 24.7798 24.2682C23.5371 24.2682 22.5298 23.2608 22.5298 22.0182C22.5298 21.604 22.194 21.2682 21.7798 21.2682H18.0298Z" fill="#192CD1" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">Agency Banking</span>
                            <span class="sub">Business Payments</span>
                        </div>
    
                    </li>
    
    
                    <!-- Documentation -->
                    <li class="title">Documentation</li>
    
                    <!-- Product -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path d="M16.1138 14.6979C15.856 14.6212 15.5779 14.6956 15.3896 14.8915C15.2012 15.0875 15.1331 15.3734 15.212 15.6362L17.5805 23.5203H25.8731C26.2765 23.5203 26.6035 23.8552 26.6035 24.2683C26.6035 24.6815 26.2765 25.0164 25.8731 25.0164H17.5806L15.2121 32.9002C15.1331 33.163 15.2013 33.449 15.3897 33.6449C15.578 33.8409 15.8561 33.9152 16.1139 33.8385C22.6369 31.8976 28.6946 28.8377 34.0757 24.8755C34.2665 24.7349 34.3797 24.5089 34.3797 24.2681C34.3797 24.0273 34.2665 23.8013 34.0757 23.6607C28.6946 19.6986 22.6369 16.6387 16.1138 14.6979Z" fill="#192CD1" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">Product</span>
                            <span class="sub">Official product documentation</span>
                        </div>
                    </li>
    
                    <!-- API -->
                    <li class="item">
                        <div class="icon">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.779785" y="0.268188" width="48" height="48" rx="12" fill="#EAECFF" />
                                <path d="M16.1138 14.6979C15.856 14.6212 15.5779 14.6956 15.3896 14.8915C15.2012 15.0875 15.1331 15.3734 15.212 15.6362L17.5805 23.5203H25.8731C26.2765 23.5203 26.6035 23.8552 26.6035 24.2683C26.6035 24.6815 26.2765 25.0164 25.8731 25.0164H17.5806L15.2121 32.9002C15.1331 33.163 15.2013 33.449 15.3897 33.6449C15.578 33.8409 15.8561 33.9152 16.1139 33.8385C22.6369 31.8976 28.6946 28.8377 34.0757 24.8755C34.2665 24.7349 34.3797 24.5089 34.3797 24.2681C34.3797 24.0273 34.2665 23.8013 34.0757 23.6607C28.6946 19.6986 22.6369 16.6387 16.1138 14.6979Z" fill="#192CD1" />
                            </svg>
                        </div>
                        <div class="text">
                            <span class="main">API</span>
                            <span class="sub">Documentation for developers</span>
                        </div>
                    </li>
    
    
                    <!-- Countries  -->
                    <li class="title">Countries</li>
                    <?php include './sections/nav-components/ng.php' ?>
                    <?php include './sections/nav-components/ks.php' ?>
    
    
                    <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                </ul>
            </div>
    
    
            <!-- MOBILE DROPDOWN -->
        </div>
    
    </nav>
</div>