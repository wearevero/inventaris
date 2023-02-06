<footer aria-label="Site Footer" class="bg-black border-t-2 border-white border-solid lg:grid lg:grid-cols-5">
    <div class="relative block h-32 lg:col-span-2 lg:h-full">
      <img
        data-aos="zoom-in-up"
        data-aos-delay="150"
        src="{{ asset('/basement.jpeg') }}"
        alt=""
        class="absolute inset-0 object-cover w-full h-full"
      />
    </div>
  
    <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-10">
      <div class="">
        <p class="font-montreal mb-3 uppercase text-white text-xl italic" data-aos="fade-right" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-duration="100">
          v 1.0.0.1 — beta
        </p>
        <div>
          <p class="block text-3xl tracking-wide font-display font-bold text-white sm:text-4xl" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
            Veronique hq Engineering Team —  <span class="text-white">we make cool shit that performs ༻ </span>
          </p>
          <ul class="mt-8 font-montreal tracking-wide font-semibold space-y-1 text-lg text-white">
            <li data-aos="fade-top" data-aos-delay="230">{{ date('M / d / Y', strtotime(now())) }} ⨉ Veronique Oro Corp. All rights reserved.</li>
          </ul>
  
          <ul class="flex text-oranged gap-6 mt-8">
            <li>
              <a
                href="https://github.com/wearevero"
                rel="noreferrer"
                target="_blank"
                class="transition hover:opacity-75"
              >
                <span class="sr-only">GitHub</span>
  
                <svg
                  class="w-8 h-8 animate-pulse"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  