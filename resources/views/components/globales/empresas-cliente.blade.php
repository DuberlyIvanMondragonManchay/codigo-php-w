<div class="bg-white pt-40 ">

    <div>
        <h2 class="text-3xl text-blue-ligth font-semibold text-center lg:px-48 ">Estas empresas publican en Wortika</h2>
    </div>
    <div x-data="{swiper: null}"
    x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,

        breakpoints: {
          330: {
            slidesPerView: 2,
            spaceBetween: 0
          },
          640: {
            slidesPerView: 3,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 0,
          },
          1600:{
            slidesPerView: 8,
            spaceBetween: 0,
          }
        },
      })"
    class="relative w-3/4 mx-auto flex flex-row my-20"
  >
    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
      <button @click="swiper.slidePrev()"
              class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
      </button>
    </div>

    <div class="swiper-container" x-ref="container">
      <div class="swiper-wrapper">

        <!-- Slides -->
        <div class="swiper-slide p-4">
          <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
              <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_bbva.svg?alt=media&token=c232bb56-8ac2-4642-b945-bb826022b0e8" alt="bbva">
              <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
          </div>
        </div>

        <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_bcp.svg?alt=media&token=d7fa8d28-c6bf-46e6-a6c2-d32ae3a28a07" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>

          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_positiva.svg?alt=media&token=c1448496-c42b-445e-a46d-104e313892fd" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>

          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_rimac.svg?alt=media&token=cd141d63-7990-41e5-b3aa-d67728b9b29a" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_scotia.svg?alt=media&token=22986d38-2771-42b3-9f3f-8009fad660b4" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_uber.svg?alt=media&token=7deeb97f-b21c-480c-b2c3-e1b2ac7011cf" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_scotia.svg?alt=media&token=22986d38-2771-42b3-9f3f-8009fad660b4" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_scotia.svg?alt=media&token=22986d38-2771-42b3-9f3f-8009fad660b4" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_uber.svg?alt=media&token=7deeb97f-b21c-480c-b2c3-e1b2ac7011cf" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>
          <div class="swiper-slide p-4">
            <div class="flex flex-col justify-center items-center rounded-2xl  shadow  border-1 border-gray-1 py-10">
                <img class="w-20 h-20 text-center" src="https://firebasestorage.googleapis.com/v0/b/wortika-fe182.appspot.com/o/company_scotia.svg?alt=media&token=22986d38-2771-42b3-9f3f-8009fad660b4" alt="bbva">
                <p class="text-center font-normal text-blue-dark text-base  pt-2">Ver ofertas <br/> laborales</p>
            </div>
          </div>

        <!-- Slides End -->

      </div>
    </div>

    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
      <button @click="swiper.slideNext()"
              class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
        <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      </button>
    </div>

  </div>
