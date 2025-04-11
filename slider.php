<?php
include_once('__content.php');
include_once('_header.php');
?>

<style>
    .customSlider {
        box-shadow: inset 0 0 0 10px red;
        position: relative;
        width: 100%;
        height: 600px;
    }

    .slider-item {
        box-shadow: inset 0 0 0 10px purple;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        opacity: 0;

        left: 10px;/* nao é base */
        top: 10px;/* nao é base */
        width: calc(100% - 20px);/* nao é base */
        height: calc(100% - 20px);/* nao é base */

        display: flex;
        justify-content: center;
    }
    .slider-item.actived {
        box-shadow: inset 0 0 0 10px green;
        z-index: 5;
        opacity: 1;
    }
    /* ------ */
    .slider-item > * {
        box-shadow: inset 0 0 0 5px blue;
    }
    .slider-item p {
        font-size: 60px;
        font-weight: bold;
    }
    /* ------ */

    .slider-prev,
    .slider-next {
        position: absolute;
        top: 0;
        z-index: 10;
        width: 100px;
        height: 100%;
        background-color: pink;
        opacity: .2;
        cursor:  pointer;
    }
    .slider-prev:hover,
    .slider-next:hover {
        opacity: .5;
    }
    .slider-prev {
        left: 0;
    }
    .slider-next {
        right: 0;
    }

    .slider-pagination {
        background-color: orange;
        position: absolute;
        z-index: 20;
        bottom: 0;
        width: 100%;
        display: flex;
        gap: 5px;
    }
    .slider-pagination span {
        background-color: purple;
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 100px;
    }

    /* /////////////////////////////////////////////// */
    /* Contêiner principal */
.custom-slider {
  position: relative;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  overflow: hidden;
}

/* Wrapper dos slides */
.slider-wrapper {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

/* Slides individuais */
.slider-wrapper > div {
  flex: 0 0 100%;
  box-sizing: border-box;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
  pointer-events: none;
}

/* Slide ativo */
.slider-wrapper > div.active {
  opacity: 1;
  pointer-events: auto;
}

/* Setas de navegação */
.custom-prev,
.custom-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
  z-index: 10;
}

.custom-prev {
  left: 10px;
}

.custom-next {
  right: 10px;
}

/* Paginação */
.custom-pagination {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 5px;
}

.custom-pagination span {
  width: 10px;
  height: 10px;
  background: #ccc;
  border-radius: 50%;
  cursor: pointer;
}

.custom-pagination span.active {
  background: #333;
}



/* ///////////////////////////////////// */

.meu-slider {
    box-shadow: inset 0 0 0 10px red;
}

.slick-list {
    box-shadow: inset 0 0 0 10px pink;
}

.slick-track {
    box-shadow: inset 0 0 0 10px green;
}

.slick-slide {
    box-shadow: inset 0 0 0 10px orange;
}

.slick-slide .inner {
    box-shadow: inset 0 0 0 10px yellow;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    flex-direction: row;
}
.slick-slide .inner > * {
    box-shadow: inset 0 0 0 5px lightblue;
}
.slick-slide .inner img {
    opacity: .5;
}
.slick-slide .inner p {
    position: relative;
    bottom: -50px;
}

.slick-slide.slick-current.slick-active .inner p {
    bottom: 0;
    transition: bottom 2s ease-in-out;
}
</style>

<main>

    <section>

        <div class="meu-slider">
            <div>
                <div class="inner">
                    <div><img src="./upload/produtos-img01.png" alt=""></div>
                    <div><p>Slide 1</p></div>
                </div>
            </div>
            
            <div>
                <div class="inner">
                    <div><img src="./upload/produtos-img02.png" alt=""></div>
                    <div><p>Slide 2</p></div>
                </div>
            </div>

            <div>
                <div class="inner">
                    <div><img src="./upload/produtos-img03.png" alt=""></div>
                    <div><p>Slide 3</p></div>
                </div>
            </div>
        </div>

        <hr>

        <!--
        <div>
            <div class="slider">
                <div><img src="./upload/produtos-img01.png" alt=""><p>Slide 1</p></div>
                <div><img src="./upload/produtos-img02.png" alt=""><p>Slide 2</p></div>
                <div><img src="./upload/produtos-img03.png" alt=""><p>Slide 3</p></div>
            </div>

            <button class="custom-prev">←</button>
            <button class="custom-next">→</button>

            <div class="custom-pagination"></div>
        </div>
        -->

        <hr>

        <!--
        <div class="customSlider">
            <div class="slider-wrapper">

                <div class="slider-item actived">
                    <div>
                        <img src="./upload/produtos-img01.png" alt="">
                    </div>

                    <div>
                        <p>Slide 1</p>
                    </div>
                </div>

                <div class="slider-item">
                    <div>
                        <img src="./upload/produtos-img02.png" alt="">
                    </div>

                    <div>
                        <p>Slide 2</p>
                    </div>
                </div>

            </div>

            <div class="slider-pagination">
                <span></span>
                <span></span>
            </div>

            <div class="slider-prev">←</div>
            <div class="slider-next">→</div>
        </div>
        -->

    </section>

    <div class="custom-pagination"></div>

</main>

<?php include_once('_footer.php'); ?>