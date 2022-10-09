<div>
    <div class="footer_top">
        <div class="services">
                @foreach ($options as $option)
                <div class="service_item">
                    <img class="img_options" src={{$option['img']}} alt={{$option['name']}}>
                    <a href="#">{{ $option['name'] }}</a>
                </div>
                @endforeach
        </div>
    </div>
    <div class="footer_center">
        <div class="wrapper_footer_center">
            <div class="wrapper_photo_text">
                <div class="footer_lists">
                    <div class="col">
                        <h4 class="title_list">DC COMICS</h4>
                        <ul class="singol_list">
                            @foreach ($links1 as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                            @endforeach     
                        </ul>
                        <h4 class="title_list">SHOP</h4>
                        <ul class="singol_list">
                            @foreach ($links2 as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                            @endforeach             
                        </ul>
                    </div>  
                    <div class="col">
                        <h4 class="title_list">DC</h4>
                        <ul class="singol_list">
                            @foreach ($links3 as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                            @endforeach                      
                        </ul>
                    </div>
                    <div class="col">
                        <h4 class="title_list">SITES</h4>
                        <ul class="singol_list">
                            @foreach ($links4 as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                            @endforeach                  
                        </ul>
                    </div>
                
                </div>
                <div class="copyright">
                    <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <span><a href="#">noted here.</a></span> All rights reserved.</p>
                    <a href="#">Cooking Settings</a>
                </div>
            </div>
            <div class="footer_picture_dc">
                <img src="../img/dc-logo-bg.png" alt="Logo DC Bg">
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="wrapper_footer_bottom">
            <button type="submit">SIGN-UP NOW!</button>
            <ul class="list_icons">
                <h4>FOLLOW US</h4>
                @foreach ($socials as $social)
                <li>
                    <img src={{$social['img']}} alt={{$social['name']}}>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>