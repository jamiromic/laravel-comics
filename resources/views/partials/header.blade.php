<div class="container">
    <div class="logo">
        <img src="../assets/dc-logo.png" alt="Logo Digital Comics">
    </div>
        <ul class="main_list">
           <li v-for="(item,i) in dataHeader" :key="i" class='list_item'> {{ item }} </li>
        </ul>
</div>