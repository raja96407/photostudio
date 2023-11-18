<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Andreas Remdt" />
    <meta
      name="description"
      content="This is a solution to the interactive rating component challenge on Frontend Mentor"
    />

    <title>Rating</title>

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />

    <style>
      :root {
        --clr-orange: hsl(25, 97%, 53%);
        --clr-white: hsl(0, 0%, 100%);
        --clr-light-gray: hsl(217, 12%, 63%);
        --clr-gray: hsl(216, 12%, 54%);
        --clr-blue: hsl(213, 19%, 18%);
        --clr-dark-blue: hsl(216, 12%, 8%);
        --clr-gradient: linear-gradient(to top, hsl(215, 24%, 12%), hsl(215, 20%, 17%));
      }

      @font-face {
        font-family: Overpass;
        font-style: normal;
        font-weight: 700;
        src: local("Overpass Bold"), local("Overpass-Bold"), url(./fonts/overpass-bold.woff) format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2212, U+2215;
        font-display: swap;
      }

      @font-face {
        font-family: Overpass;
        font-style: normal;
        font-weight: 400;
        src: local("Overpass Regular"), local("Overpass-Regular"), url(./fonts/overpass-regular.woff) format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2212, U+2215;
        font-display: swap;
      }

      * {
        box-sizing: border-box;
      }

      body,
      h1,
      p {
        margin: unset;
      }

      html:focus-within {
        scroll-behavior: smooth;
      }

      body {
        min-block-size: 100vh;
        text-rendering: optimizeSpeed;
        background-color: var(--clr-dark-blue);
        display: grid;
        place-items: center;
        font: clamp(14px, 3vw, 15px) / 1.6 Overpass, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }

      img {
        max-width: 100%;
        display: block;
      }

      input,
      button {
        font: inherit;
      }

      @media (prefers-reduced-motion: reduce) {
        html:focus-within {
          scroll-behavior: auto;
        }

        *,
        *::before,
        *::after {
          animation-duration: 0.01ms !important;
          animation-iteration-count: 1 !important;
          transition-duration: 0.01ms !important;
          scroll-behavior: auto !important;
        }
      }

      h1 {
        color: var(--clr-white);
        font-size: clamp(24px, 5.5vw, 28px);
        line-height: 1.25;
        margin-bottom: 0.5rem;
      }

      p {
        color: var(--clr-light-gray);
      }

      .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
      }

      .text-center {
        text-align: center;
      }

      main {
        max-width: 412px;
        width: calc(100% - 3rem);
        background-image: var(--clr-gradient);
        border-radius: 1.875rem;
        padding: clamp(1.5rem, 5vw, 2rem);
      }

      figure {
        --size: clamp(2.5rem, 6vw, 3rem);

        width: var(--size);
        aspect-ratio: 1;
        background-color: var(--clr-blue);
        margin: 0 0 1.875rem 0;
        display: grid;
        place-items: center;
        border-radius: var(--size);
      }

      .rating-group {
        display: flex;
        justify-content: space-between;
        margin-top: 1.5rem;
      }

      .radio-button .label {
        --size: clamp(2.625rem, 10vw, 3.1875rem);

        display: block;
        width: var(--size);
        aspect-ratio: 1;
        background-color: var(--clr-blue);
        display: grid;
        font-weight: 700;
        font-size: 16px;
        place-items: center;
        border-radius: var(--size);
        color: var(--clr-gray);
        cursor: pointer;
        transition: background-color 0.1s linear, color 0.1s linear;
      }

      .radio-button input:checked + .label {
        background-color: var(--clr-gray);
        color: var(--clr-white);
      }

      .radio-button:hover .label,
      .radio-button input:focus + .label {
        background-color: var(--clr-orange);
        color: var(--clr-white);
      }

      .button {
        --size: 2.8125rem;

        background-color: var(--clr-orange);
        color: var(--clr-white);
        height: var(--size);
        border-radius: var(--size);
        text-transform: uppercase;
        cursor: pointer;
        font-weight: 700;
        letter-spacing: 2px;
        border: unset;
        width: 100%;
        margin-top: 2.6875rem;
        transition: background-color 0.1s linear, color 0.1s linear;
      }

      .button:is(:hover, :focus-visible) {
        outline: none;
        background-color: var(--clr-white);
        color: var(--clr-orange);
      }

      .rating-result {
        --size: 2rem;

        background-color: var(--clr-blue);
        color: var(--clr-orange);
        height: var(--size);
        border-radius: var(--size);
        line-height: var(--size);
        width: max-content;
        padding-inline: 1.25rem;
        margin: 2.25rem auto;
      }

      .illustration {
        margin-inline: auto;
      }

      .animate-out {
        animation: animate-out 0.15s linear both;
      }

      .animate-in {
        animation: animate-in 0.15s linear both;
      }

      @keyframes animate-out {
        from {
          opacity: 1;
        }

        to {
          opacity: 0;
          translate: -20px;
        }
      }

      @keyframes animate-in {
        from {
          opacity: 0;
          translate: 20px;
        }

        to {
          opacity: 1;
          translate: 0;
        }
      }
    </style>
  </head>
  <body>
    <main>
      <div data-wrapper aria-live="polite">
        <figure aria-hidden="true">
          <img src="rating1.jpg" alt="" width="16" height="16" />
        </figure>

        <h1>How did we do?</h1>
        <p>
          Please let us know how we did with your support request. All feedback is appreciated to help us improve our
          offering!
        </p>

        <form data-form>
    <div class="rating-group">
          
            <label class="radio-button">
              <input type="radio" value="1" name="rating" class="sr-only" />
              <span class="label">1 <span class="sr-only">star</span></span>
            </label>
            <label class="radio-button">
              <input type="radio" value="2" name="rating" class="sr-only" />
              <span class="label">2 <span class="sr-only">stars</span></span>
            </label>
            <label class="radio-button">
              <input type="radio" value="3" name="rating" class="sr-only" />
              <span class="label">3 <span class="sr-only">stars</span></span>
            </label>
            <label class="radio-button">
              <input type="radio" value="4" name="rating" class="sr-only" />
              <span class="label">4 <span class="sr-only">stars</span></span>
            </label>
            <label class="radio-button">
              <input type="radio" value="5" name="rating" class="sr-only" />
              <span class="label">5 <span class="sr-only">stars</span></span>
            </label>
          </div>

          <button type="submit" class="button">Submit</button>
        </form>
      </div>

      <template data-template>
        <img src="thanku.jpg" alt="" width="162" height="108" class="illustration" />
        <p class="rating-result">You selected {{ result }} out of 5</p>
        <h1 class="text-center">Thank you!</h1>
        <p class="text-center">
          We appreciate you taking the time to give a rating. If you ever need more support, don’t hesitate to get in
          touch!
        </p>
      </template>
    </main>

    <script>
      const form = document.querySelector("[data-form]");
      const template = document.querySelector("[data-template]");
      const wrapper = document.querySelector("[data-wrapper]");

      function handleSubmit(event) {
        event.preventDefault();

        const rating = new FormData(event.target).get("rating");

        if (rating) {
          playAudio();
          swipe(rating);
        }
      }

      function swipe(rating) {
        wrapper.addEventListener(
          "animationend",
          () => {
            wrapper.style.height = wrapper.offsetHeight + "px";
            wrapper.innerHTML = template.innerHTML.replace(/{{ result }}/g, rating);
            wrapper.classList.replace("animate-out", "animate-in");
          },
          { once: true }
        );
        wrapper.classList.add("animate-out");
      }

      function playAudio() {
        const audio = new Audio("./sounds/whoosh.mp3");

        audio.volume = 0.2;
        audio.play();
      }

      form.addEventListener("submit", handleSubmit);
    </script>
  </body>
</html>