<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Для SRG от Артура Сафина</title>
    <link rel="stylesheet" href="/style/bootstrap.css">
    <link rel="stylesheet" href="/style/main.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <ul class="d-flex justify-content-between navbar__ul desctop-ul">
                <li class="navbar__ul_li dropdown">
                    <a href="https://t.me/rusgamehack" target="blank" class="navbar__ul_li-link py-2">
                        Ссылки на меня
                    </a>
                    <ul class="dropdown-points">
                        <li class="dropdown-point mb-1">
                            <a href="https://t.me/rusgamehack" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Telegram</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://vk.com/artur.safin" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">VK</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="tel:+79639079224" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Телефон</div>    
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navbar__ul_li">
                    <a href="https://www.youtube.com/watch?v=-SlaxjfvVcI" target="_blank" class="has-child navbar__ul_li-link py-2">
                        Смешное видео
                    </a>
                </li>
                <li class="navbar__ul_li dropdown">
                    <a href="https://srgroup.ru/" target="_blank" class="navbar__ul_li-link py-2">
                        Ссылки на SRG
                    </a>
                    <ul class="dropdown-points">
                        <li class="dropdown-point mb-1">
                            <a href="mailto:info@srgroup.ru" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Почта</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://vk.com/srgroup" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">VK</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://t.me/fintechipoteka" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Telegram</div>    
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="mobile hamburger py-2">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            
            <ul class="mobile mobile-ul px-7">
                <li class="navbar__ul_li">
                    <a href="https://t.me/rusgamehack" target="blank" class="navbar__ul_li-link py-2">
                        Ссылки на меня
                    </a>
                    <ul class="dropdown-points-mobile px-2">
                        <li class="dropdown-point mb-1">
                            <a href="https://t.me/rusgamehack" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Telegram</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://vk.com/artur.safin" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">VK</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="tel:+79639079224" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Телефон</div>    
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navbar__ul_li">
                    <a href="https://www.youtube.com/watch?v=-SlaxjfvVcI" target="_blank" class="has-child navbar__ul_li-link py-2">
                        Смешное видео
                    </a>
                </li>
                <li class="navbar__ul_li">
                    <a href="https://srgroup.ru/" target="_blank" class="navbar__ul_li-link py-2">
                        Ссылки на SRG
                    </a>
                    <ul class="dropdown-points-mobile px-2">
                        <li class="dropdown-point mb-1">
                            <a href="mailto:info@srgroup.ru" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Почта</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://vk.com/srgroup" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">VK</div>    
                            </a>
                        </li>
                        <li class="dropdown-point mb-1">
                            <a href="https://t.me/fintechipoteka" target="_blank" class="dropdown-point-link">
                                <div class="dropdown-point-link-text">Telegram</div>    
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>




    <section class="content pt-5">
        <div class="container">
            <h1 class="title content-title">Для связи с нами отправьте заявку</h1>
            <button class="content-cause-popup btn mt-4">Отправить заявку</button>
        </div>
    </section>




    <div class="popup align-items-center justify-content-center">
        <form class="py-3 px-4" id="myForm">
            <input name="name" type="text" placeholder="Имя" class="py-2 px-3 mb-2">
            <input 
                name="tel" 
                type="text" 
                placeholder="Телефон" 
                class="py-2 px-3 mb-2 input-tel"
            >
            <input name="email" type="text" placeholder="Почта" class="py-2 px-3 mb-2">
            <textarea placeholder="Текст заявки" name="text" class="py-2 px-3 mb-2"></textarea>

            <input type="submit" class="btn input-btn submit-form" value="Отправить">
            <div class="error mt-1" id="error">
                
            </div>
        </form>
        <div class="thanks py-4 px-5">
            Ваша заявка успешно отправлена!
        </div>
    </div>






    <footer class="py-4">
        <div class="container">
            <div class="footer-text">
                Простой и лаконичный футер
                <br>
                Но если есть желание, можете снова ознакомиться с моим портфолио:
            </div>
            <div class="footer-text-links">
                <div class="footer-text-links mt-2">
                    <a href="https://www.wanngo.ru/" target="_blank">WANNGO</a> - доработка существующего контента (80% написано с нуля). Opencart 
                </div>
                <div class="footer-text-links mt-2">
                    <a href="https://dev.prosafe.spb.ru/" target="_blank">PROSAFE</a> - доработка существующего контента (80% написано с нуля). Opencart
                </div>
                <div class="footer-text-links mt-2">
                    <a href="http://test.bugakos.com/" target="_blank">BUGAKOS</a> - создание сайта с нуля. Laravel + ORCHID
                </div>    
            </div>
        </div>
        
    </footer>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>