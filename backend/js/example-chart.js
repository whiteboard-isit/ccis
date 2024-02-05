 2;
  }
  .md\:order-3 {
    order: 3;
  }
  .md\:order-4 {
    order: 4;
  }
  .md\:order-5 {
    order: 5;
  }
  .md\:order-6 {
    order: 6;
  }
}

@media (max-width: 575px) {
  .sm\:order-1 {
    order: 1;
  }
  .sm\:order-2 {
    order: 2;
  }
  .sm\:order-3 {
    order: 3;
  }
  .sm\:order-4 {
    order: 4;
  }
  .sm\:order-5 {
    order: 5;
  }
  .sm\:order-6 {
    order: 6;
  }
}

.svg-waves {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 5;
  width: 100%;
  height: 180px;
}

@media (max-width: 767px) {
  .svg-waves {
    height: 80px;
  }
}

.svg-waves__parallax > use {
  -webkit-animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
          animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
}

.svg-waves__parallax > use:nth-child(1) {
  -webkit-animation-delay: -2s;
          animation-delay: -2s;
  -webkit-animation-duration: 7s;
          animation-duration: 7s;
  fill: rgba(255, 255, 255, 0.7);
}

.svg-waves__parallax > use:nth-child(2) {
  -webkit-animation-delay: -3s;
          animation-delay: -3s;
  -webkit-animation-duration: 10s;
          animation-duration: 10s;
  fill: rgba(255, 255, 255, 0.5);
}

.svg-waves__parallax > use:nth-child(3) {
  -webkit-animation-delay: -4s;
          animation-delay: -4s;
  -webkit-animation-duration: 13s;
          animation-duration: 13s;
  fill: rgba(255, 255, 255, 0.3);
}

.svg-waves__parallax > use:nth-child(4) {
  -webkit-animation-delay: -5s;
          animation-delay: -5s;
  -webkit-animation-duration: 20s;
          animation-duration: 20s;
  fill: white;
}

@-webkit-keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }
  100% {
    transform: translate3d(85px, 0, 0);
  }
}

@keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }
  100% {
    transform: translate3d(85px, 0, 0);
  }
}

.side-content {
  position: relative;
}

.side-content__wrap > *:nth-child(3n + 3) .side-content__item {
  left: unset;
  right: 100%;
}

.side-content__item {
  position: absolute;
  z-index: 20;
  top: 50%;
  transform: translateY(-50%);
  left: 100%;
  width: 360px;
  transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
  pointer-events: none;
  opacity: 0;
}

@media (max-width: 991px) {
  .side-content__item {
    display: none;
  }
}

.side-content:hover .side-content__item {
  pointer-events: auto;
  opacity: 1;
}

.toggle-element.-dshb-more {
  position: absolute;
  top: 55px;
  right: 10px;
}

.absolute-button {
  position: absolute;
  top: 10px;
  right: 10px;
}

.pointer {
  cursor: pointer;
}

.-sidebar-buttons {
  position: relative;
}

.-sidebar-buttons > * {
  transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
  opacity: 0;
  pointer-events: none;
}

.-sidebar-buttons > *.-is-button-active {
  transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) 0.3s;
  opacity: 1;
}

.-sidebar-buttons > *:nth-child(1n+2) {
  position: absolute;
  top: 0;
  left: 0;
}

.-sidebar-menu {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
  pointer-events: none;
  opacity: 0;
  transform: translateX(30px);
}

.-sidebar-menu.-sidebar-menu-opened {
  transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) 0.3s;
  transform: none;
  opacity: 1;
}

.-is-el-visible .-sidebar-buttons > *.-is-button-active {
  pointer-events: auto;
}

.-is-el-visible .-sidebar-menu.-sidebar-menu-opened {
  pointer-events: auto;
}

.progress-bar {
  position: relative;
}

.progress-bar__bg {
  width: 100%;
  height: 4px;
  border-radius: 4px;
}

.progress-bar__bar {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 5;
  height: 100%;
  border-radius: 4px;
}

.progress-bar__bar span {
  position: absolute;
  right: 0;
  bottom: 100%;
}

.preloader {
  z-index: 1000;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.preloader__bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #04021b;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  transform-origin: top;
}

.preloader__bg.origin-bottom {
  transform-origin: bottom !important;
}

.-hover-dshb-header-light {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-hover-dshb-header-light:hover {
  color: var(--color-purple-1) !important;
  background-color: var(--color-light-4) !important;
}

.-base-sidebar-menu-hover {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-base-sidebar-menu-hover:hover {
  background-color: var(--color-light-4) !important;
}

.w-unset {
  width: unset;
}

.scroll-bar-1::-webkit-scrollbar {
  width: 4px;
  height: 4px;
}

.scroll-bar-1::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 12px;
}

.-stepCard-hover {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-stepCard-hover .stepCard__icon > *,
.-stepCard-hover .stepCard__title,
.-stepCard-hover .stepCard__text {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-stepCard-hover:hover {
  background-color: white !important;
}

.-stepCard-hover:hover .stepCard__icon > * {
  color: var(--color-dark-1) !important;
}

.-stepCard-hover:hover .stepCard__title {
  color: var(--color-dark-1) !important;
}

.-stepCard-hover:hover .stepCard__text {
  color: var(--color-light-1) !important;
}

.-infoCard-hover {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-infoCard-hover .infoCard__title {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-infoCard-hover:hover {
  background-color: white !important;
}

.-infoCard-hover:hover .infoCard__title {
  color: var(--color-dark-1) !important;
}

.-featureCard-hover .featureCard__content,
.-featureCard-hover .featureCard__title,
.-featureCard-hover .featureCard__text {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-featureCard-hover:hover .featureCard__content {
  background-color: var(--color-dark-1) !important;
}

.-featureCard-hover:hover .featureCard__title,
.-featureCard-hover:hover .featureCard__text {
  color: white !important;
}

.-featureCard-hover-3 .featureCard__content,
.-featureCard-hover-3 .featureCard__title,
.-featureCard-hover-3 .featureCard__text {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-featureCard-hover-3:hover .featureCard__content {
  background-color: var(--color-purple-1) !important;
}

.-featureCard-hover-3:hover .featureCard__title,
.-featureCard-hover-3:hover .featureCard__text {
  color: white !important;
}

.-featureCard-hover-2 .featureCard__icon {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.-featureCard-hover-2:hover .featureCard__icon {
  color: white !important;
  background-color: var(--color-dark-1) !important;
}

.-teamCard-hover .teamCard__image {
  position: relative;
}

.-teamCard-hover .teamCard__socials {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(26, 6, 79, 0.6);
  border-radius: 8px;
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
  opacity: 0;
}

.-teamCard-hover .teamCard__socials > div {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
  transform: translateY(15px);
}

.-teamCard-hover:hover .teamCard__socials {
  opacity: 1;
}

.-teamCard-hover:hover .teamCard__socials > div {
  transform: translateY(0);
}

.calendar-top-cell {
  text-align: center;
  width: 120px;
  height: 50px;
}

.calendar-cell {
  height: 150px;
  padding: 6px 10px;
  overflow-y: scroll;
}

.calendar-cell::-webkit-scrollbar {
  width: 4px;
}

.calendar-cell::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 12px;
}

.toggle-element {
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
  opacity: 0;
  pointer-events: none;
}

.toggle-element.-down {
  transform: translateY(20px);
}

.toggle-element.-is-el-visible {
  z-index: 25;
  transform: none;
  opacity: 1;
  pointer-events: auto;
}

.toggle-element.-dropdown {
  position: absolute;
  top: 100%;
  left: 50%;
  padding: 26px;
  background-color: white;
  box-shadow: 0px 25px 70px rgba(1, 33, 58, 0.07);
  min-width: 180px;
  border-radius: 8px;
  transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
  transform: translateX(-50%);
}

.footer-bg-color {
  background-color: #311F61;
}

.invoice-wrapper {
  min-height: 100vh;
}

.invoice-wrapper .invoice__content {
  padding: 120px 50px;
  padding-bottom: 100px;
}

.invoice-wrapper .invoice__footer {
  padding: 45px 0;
}

@media (max-width: 575px) {
  .sm\:pos-unset {
    position: unset;
  }
}

.toggle-bottom {
  position: absolute;
  top: 100%;
}

.toggle-bottom.-icons-1 {
  width: 160px;
}

.toggle-bottom.-profile {
  width: 300px;
  right: 0;
}

@media (max-width: 575px) {
  .toggle-bottom.-profile {
    position: fixed;
    top: unset;
    right: unset;
    bottom: 0;
    left: 0;
    width: 100vw;
  }
}

.toggle-bottom.-notifications {
  width: 470px;
  right: -20px;
}

@media (max-width: 575px) {
  .toggle-bottom.-notifications {
    position: fixed;
    right: unset;
    bottom: unset;
    top: unset;
    left: 50%;
    transform: translateX(-50%);
    width: 90vw;
  }
}

.toggle-bottom.-courses {
  width: 380px;
  right: -20px;
}

@media (max-width: 575px) {
  .toggle-bottom.-courses {
    position: fixed;
    right: unset;
    bottom: unset;
    top: unset;
    left: 50%;
    transform: translateX(-50%);
    width: 90vw;
  }
}

.img-el__side {
  position: absolute;
  top: -20px;
  left: -20px;
}

.img-el.-w-260 {
  width: 260px;
}

.sidebar-menu {
  position: fixed;
  z-index: 500 !important;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  display: flex;
  justify-content: flex-end;
}

.sidebar-menu__content {
  overflow-y: scroll;
  overflow-x: hidden;
  width: 415px;
  height: 100%;
}

.sidebar-menu__bg {
  background-color: rgba(24, 24, 26, 0.7);
  position: fixed;
  z-index: -1;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
}

.section-slider-nav {
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.section-slider-nav.-absolute {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
}

.section-slider-nav.-absolute.-prev {
  left: -35px;
}

.section-slider-nav.-absolute.-next {
  right: -35px;
}

@media (max-width: 575px) {
  .section-slider-nav.-absolute {
    width: 48px;
    height: 48px;
  }
  .section-slider-nav.-absolute i {
    font-size: 20px !important;
  }
  .section-slider-nav.-absolute.-prev {
    left: -10px;
  }
  .section-slider-nav.-absolute.-next {
    right: -10px;
  }
}

.section-slider-nav.-absolute-out {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
}

.section-slider-nav.-absolute-out.-prev {
  right: calc(100% + 30px);
}

.section-slider-nav.-absolute-out.-next {
  left: calc(100% + 30px);
}

@media (max-width: 1500px) {
  .section-slider-nav.-absolute-out.-prev {
    right: calc(100% + 10px);
  }
  .section-slider-nav.-absolute-out.-next {
    left: calc(100% + 10px);
  }
}

.section-slider-nav.-white {
  background-color: white;
}

.section-slider-nav.-white:hover {
  background-color: var(--color-purple-1) !important;
  color: white !important;
}

.section-slider-nav.-outline-white {
  border: 2px solid white;
}

.section-slider-nav.-outline-white:hover {
  background-color: white !important;
  color: var(--color-dark-1) !important;
}

.section-slider-nav.-outline-dark-1 {
  border: 2px solid var(--color-dark-1);
}

.section-slider-nav.-outline-dark-1:hover {
  background-color: var(--color-dark-1) !important;
  color: white !important;
}

.elements-image {
  position: relative;
  display: flex;
  justify-content: flex-end;
}

@media (max-width: 575px) {
  .elements-image {
    flex-direction: column;
  }
}

.elements-image__img1 {
  margin-bottom: 120px;
}

@media (max-width: 767px) {
  .elements-image__img1 {
    padding-left: 100px;
  }
}

@media (max-width: 575px) {
  .elements-image__img1 {
    margin: 0;
    padding: 0;
  }
}

.elements-image__img2 {
  position: absolute;
  bottom: 0;
  left: 0;
}

@media (max-width: 575px) {
  .elements-image__img2 {
    position: relative;
    margin-top: 20px;
  }
}

.elements-image__el1 {
  position: absolute;
  top: 85px;
  left: 50px;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

.elements-image__el2 {
  position: absolute;
  bottom: 270px;
  left: -60px;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

.elements-image__el3 {
  position: absolute;
  bottom: 75px;
  right: 30px;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

.composition.-type-1 {
  position: relative;
  z-index: 10;
  display: grid;
  grid-template-columns: auto auto;
  justify-content: flex-end;
  gap: 60px;
}

@media (max-width: 991px) {
  .composition.-type-1 {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 575px) {
  .composition.-type-1 {
    gap: 20px;
  }
}

.composition.-type-1 .-img-1 {
  display: flex;
  justify-content: flex-end;
}

.composition.-type-1 .-img-2 {
  grid-row: span 2;
  align-self: flex-end;
}

.composition.-type-1 .-img-3 {
  display: flex;
  justify-content: flex-end;
}

.composition.-type-1 .-el-1 {
  position: absolute;
  bottom: 337px;
  right: 170px;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

@media (max-width: 991px) {
  .composition.-type-1 .-el-1 {
    right: 40px;
  }
}

.composition.-type-1 .-el-2 {
  position: absolute;
  bottom: -40px;
  left: 0;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

@media (max-width: 991px) {
  .composition.-type-1 .-el-2 {
    left: unset;
  }
}

.composition.-type-1 .-el-3 {
  position: absolute;
  top: 154px;
  left: -20px;
  box-shadow: 0px 40px 30px 0px #19192E0A;
}

@media (max-width: 991px) {
  .composition.-type-1 .-el-3 {
    left: 40px;
  }
}

@media (max-width: 575px) {
  .composition.-type-1 .-el-3 {
    top: unset;
    bottom: -30px;
    left: 20px;
  }
}

.composition.-type-2 {
  position: relative;
  display: flex;
}

@media (max-width: 767px) {
  .composition.-type-2 {
    flex-direction: column;
  }
}

@media (max-width: 575px) {
  .composition.-type-2 > * {
    width: 100% !important;
  }
}

.composition.-type-2 .-el-1 {
  width: 345px;
}

.composition.-type-2 .-el-2 {
  position: relative;
  left: -55px;
  margin-top: 58px;
  width: 300px;
}

@media (max-width: 767px) {
  .composition.-type-2 .-el-2 {
    left: 0;
  }
}

@media (max-width: 575px) {
  .composition.-type-2 .-el-2 {
    margin-top: 20px;
  }
}

.composition.-type-3 {
  position: relative;
  padding-left: 112px;
}

@media (max-width: 575px) {
  .composition.-type-3 {
    display: flex;
    flex-direction: column;
    padding-left: 0;
  }
}

.composition.-type-3 .-el-1 {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 300px;
}

@media (max-width: 575px) {
  .composition.-type-3 .-el-1 {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
    transform: none;
    top: unset;
    left: unset;
  }
}

.composition.-type-4 {
  position: relative;
  padding-bottom: 72px;
}

@media (max-width: 991px) {
  .composition.-type-4 {
    margin-bottom: 30px;
  }
}

@media (max-width: 575px) {
  .composition.-type-4 {
    margin-bottom: 20px;
    padding-bottom: 0;
  }
}

.composition.-type-4 .-el-2 {
  position: absolute;
  bottom: 0;
  right: -60px;
  width: 360px;
}

@media (max-width: 1199px) {
  .composition.-type-4 .-el-2 {
    right: 50%;
    transform: translate(50%);
  }
}

@media (max-width: 575px) {
  .composition.-type-4 .-el-2 {
    margin-top: 30px;
    position: relative;
    right: unset;
    width: 100%;
    transform: none;
  }
}

.composition.-type-5 {
  position: relative;
  padding-bottom: 170px;
  display: flex;
  justify-content: flex-end;
}

@media (max-width: 1199px) {
  .composition.-type-5 {
    margin-left: 50px;
  }
}

@media (max-width: 575px) {
  .composition.-type-5 {
    padding-bottom: 0;
    margin-left: 0;
    margin-bottom: 40px;
    flex-wrap: wrap;
    justify-content: center;
  }
}

.composition.-type-5 .-el-2 {
  position: absolute;
  bottom: 0;
  left: -40px;
}

@media (max-width: 575px) {
  .composition.-type-5 .-el-2 {
    position: relative;
    bottom: unset;
    left: unset;
    margin-top: 30px;
  }
}

.composition.-type-5 .-el-3 {
  position: absolute;
  top: 20px;
  left: 120px;
}

.composition.-type-5 .-el-4 {
  position: absolute;
  bottom: 300px;
  left: -40px;
}

@media (max-width: 575px) {
  .composition.-type-5 .-el-4 {
    position: relative;
    bottom: unset;
    left: unset;
    margin-top: 30px;
  }
  .composition.-type-5 .-el-4 .-w-260 {
    width: 100%;
  }
}

.composition.-type-5 .-el-5 {
  position: absolute;
  bottom: 101px;
  left: 250px;
}

.composition.-type-6 {
  display: grid;
  grid-template-columns: auto auto;
  align-items: center;
  gap: 30px;
}

@media (max-width: 767px) {
  .composition.-type-6 {
    grid-template-columns: 1fr;
  }
}

.composition.-type-6 > * {
  width: 280px;
}

@media (max-width: 1199px) {
  .composition.-type-6 > * {
    width: 220px;
  }
}

@media (max-width: 991px) {
  .composition.-type-6 > * {
    width: 100%;
  }
}

.composition.-type-6 .-el-2 {
  grid-row: span 2;
}

.composition.-type-7 {
  position: relative;
}

.composition.-type-7 .-el-2 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}

.composition.-type-8 {
  display: grid;
  grid-template-columns: auto auto;
  gap: 30px;
  align-items: center;
}

@media (max-width: 575px) {
  .composition.-type-8 {
    gap: 15px;
  }
}

.composition.-type-8 .-el-1 {
  grid-row: span 2;
}

@media (max-width: 991px) {
  .lg\:h-auto {
    height: auto;
  }
}

.-button-hover-1__button {
  transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
  opacity: 0;
}

@media (max-width: 1199px) {
  .-button-hover-1__button {
    opacity: 1;
  }
}

.-button-hover-1:hover .-button-hover-1__button {
  opacity: 1;
}

.show-more__content {
  overflow: hidden;
  position: relative;
  max-height: 200px;
  transition: max-height 0.2s ease-out;
}

.show-more__content::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 94.82%);
  transition: opacity 0.2s ease-out;
}

.show-more.is-active .show-more__content::after {
  opacity: 0;
}

.page-nav-menu.-line {
  border-bottom: 2px solid var(--color-light-5);
}

.page-nav-menu.-line .page-nav-menu__link {
  position: relative;
  display: block;
}

.page-nav-menu.-line .page-nav-menu__link::after {
  content: "";
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: var(--color-purple-1);
  opacity: 0;
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.page-nav-menu.-line .page-nav-menu__link.is-active {
  color: var(--color-purple-1) !important;
}

.page-nav-menu.-line .page-nav-menu__link.is-active::after {
  opacity: 1;
}

table.table thead {
  background-color: var(--color-purple-3);
}

table.table th {
  padding: 25px;
  font-size: 16px;
  line-height: 1;
  color: var(--color-purple-1);
  font-weight: 500;
}

table.table th:first-child {
  border-radius: 8px 0 0 8px;
}

table.table th:last-child {
  border-radius: 0 8px 8px 0;
}

table.table td {
  padding: 25px;
  border-bottom: 1px solid var(--color-light-5);
}

.tooltip {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #615E5E;
}

.tooltip__content {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 7px 11px;
  font-size: 14px;
  line-height: 1.2;
  background-color: var(--color-dark-8);
  color: white;
  border-radius: 8px;
  transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
  opacity: 0;
}

.tooltip__content::after {
  content: '';
  position: absolute;
  width: 0.53333rem;
  height: 0.53333rem;
  background-color: black;
  transform: rotate(45deg);
}

.tooltip.-top .tooltip__content {
  bottom: calc(100% + 6px);
  transform: translateY(8px);
}

.tooltip.-top .tooltip__content::after {
  bottom: -0.26667rem;
}

.tooltip.-bottom .tooltip__content {
  top: calc(100% + 6px);
  transform: translateY(-8px);
}

.tooltip.-bottom .tooltip__content::after {
  top: -0.26667rem;
}

.tooltip.-left .tooltip__content {
  right: calc(100% + 6px);
  transform: translateX(8px);
}

.tooltip.-left .tooltip__content::after {
  right: -0.26667rem;
}

.tooltip.-right .tooltip__content {
  left: calc(100% + 6px);
  transform: translateX(-8px);
}

.tooltip.-right .tooltip__content::after {
  left: -0.26667rem;
}

.tooltip:hover .tooltip__content {
  transform: none;
  opacity: 1;
}

.sidebar-calendar__button {
  transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.sidebar-calendar__button:hover {
  background-color: var(--color-light-3);
}

.sidebar-calendar__button.-is-active {
  background-color: var(--color-purple-1);
}

.sidebar-calendar__button.-is-active > div {
  color: white !important;
}

.bg-red-light {
  background-color: rgba(232, 84, 62, 0.15);
}

.bg-orange-light {
  background-color: rgba(231, 142, 52, 0.15);
}

.bg-blue-light {
  background-color: rgba(80, 142, 240, 0.15);
}

.bg-blue-light {
  background-color: rgba(68, 91, 149, 0.15);
}

.bg-purple-light {
  background-color: rgba(117, 69, 240, 0.15);
}

.bg-green-light {
  background-color: rgba(0, 255, 132, 0.15);
}

.dot-left {
  position: relative;
  display: flex;
  align-items: center;
}

.dot-left::before {
  content: "";
  position: absolute;
  right: calc(100% + 5px);
  width: 8px;
  height: 8px;
  border-radius: 100%;
  background-color: var(--color-purple-1);
}

.dot-left.-orange::before {
  background-color: var(--color-orange-1);
}

.table-calendar {
  overflow: scroll;
  table-layout: fixed;
  width: 100%;
}

.table-calendar td {
  text-align: right;
  vertical-align: top;
  width: 120px;
}

.overflow-scroll {
  overflow: scroll;
}

.absolute-bookmark {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
  color: var(--color-purple-1) !important;
  border-radius: 100%;
  background: white;
}













:root {
  --cardsec-height: 300px;
  --cardsec-width: calc(var(--cardsec-height) / 1.5);
}



	/* -------------------------------------------------- 
	Sections 3D cards
	/* -------------------------------------------------- */

  section#section-sections {
    padding: 0px 0 90px 0;
    margin-top:  0px;
}

@media only screen and (max-width : 1200px) {
  section#section-sections {
        padding: 0px 0 90px 0;
        margin-top: 0px;
    }
}

.container-sec-m {
    
} 

@media only screen and (max-width : 549px) {
  .container-sec-m {
      
    
    } 
}
.container-sec {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
        
.cardsec {
  width: var(--cardsec-width);
  height: var(--cardsec-height);
  position: relative;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  padding: 0 36px;
  perspective: 2500px;
  margin: 0 20px;
  margin-top: 51px;
}

.cover-image-sec {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 12px;
}

.wrapper-sec {
  transition: all 0.5s;
  position: absolute;
  width: 10