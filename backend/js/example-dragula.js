ify-content: space-evenly;
  flex-wrap: wrap;
}
.card-expo {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
}
.card-header-expo img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body-expo {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height: 250px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body-expo p {
  font-size: 13px;
  margin: 0 0 40px;
}







.cardsec:hover .wrapper-sec::before,
.wrapper-sec::after {
  opacity: 1;
}

.cardsec:hover .wrapper-sec::after {
  height: 120px;
}
.title-sec {
  transition: transform 0.5s;
  transform: translate3d(0%, -40px, 100px);
  transition: .3s;
  color: #fff;
  text-align: center;
  font-size: 19px;
}
.cardsec:hover .title-sec {
  font-size: 22px;
  transform: translate3d(0%, -100px, 100px);
  transition: .3s;
}

.desc-sec {
    width: 100%;
    color: #ffffff;
    font-size: 11px;
    position: absolute;
    text-align: center;
    line-height: 20px;
    top: 178px;
    padding-right: 10px;
    padding-left: 10px;
    opacity: 0;
    transition: .3s;
    
}

.cardsec:hover .desc-sec {
  opacity: 0;
  transition: .3s;
}

.character-sec {
  width: 100%;
  opacity: 0;
  transition: all 0.5s;
  position: absolute;
  z-index: -1;
}

.cardsec:hover .character-sec {
  opacity: 1;
  transform: translate3d(0%, -25%, 100px);
}




.swiper-slide a {
  display: flex;
  justify-content: center;
}


.swiper {
width: