<div class="container">
    <div class="hero">
        <button>CURRENT SERIES</button>
    </div>
    <div class="wrapper">
        <ComicCard v-for="(card,i) in dataCard" :key="i" :src="card.thumb" :titolo="card.series" />
    </div>
    <button>LOAD MORE</button>
    

</div>