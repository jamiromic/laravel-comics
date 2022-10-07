<div>
    <div class="footer_top">
        <div class="services">
            <div v-for="(item,i) in dataOptions" :key="i" class="service_item">
                <img :src="item.img" :alt="item.name">
                <a href="#">{{ item.name }}</a>
            </div>
        </div>
    </div>
    <div class="footer_center">
        <div class="footer_lists">
            <div class="col">
                <h4 class="title_list">DC COMICS</h4>
                    <ul class="singol_list">
                        <li v-for="(item,i) in dataLink" :key="i">
                            <a href="#">{{ item }}</a>
                        </li>       
                    </ul>
                    <h4 class="title_list">SHOP</h4>
                    <ul class="singol_list">
                        <li v-for="(item,i) in dataLink2" :key="i">
                            <a href="#">{{ item }}</a>
                        </li>               
                    </ul>
            </div>  
            <div class="col">
                <h4 class="title_list">DC</h4>
                    <ul class="singol_list">
                        <li v-for="(item,i) in dataLink3" :key="i">
                            <a href="#">{{ item }}</a>
                        </li>                     
                    </ul>
            </div>
            <div class="col">
                <h4 class="title_list">SITES</h4>
                    <ul class="singol_list">
                        <li v-for="(item,i) in dataLink4" :key="i">
                            <a href="#">{{ item }}</a>
                        </li>                  
                    </ul>
            </div>
        </div>
        <div class="footer_picture_dc">
            <img src="../assets/dc-logo-bg.png" alt="Logo DC Bg">
        </div>

    </div>
    <div class="footer_bottom">
        <button type="submit">SIGN-UP NOW!</button>
        <ul class="list_icons">
            <h4>FOLLOW US</h4>
            <li v-for="(item,i) in dataSocial" :key="i">
                <img :src="item.img" :alt="item.name">
            </li>
        </ul>

    </div>

</div>