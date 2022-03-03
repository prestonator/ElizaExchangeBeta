<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link href="https://pagecdn.io/lib/easyfonts/fonts.css" rel="stylesheet" />
    <link rel="stylesheet" href="../fontawesome/css/all.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Document</title>
    <?php wp_head();?>
  </head>
  <body>
    <div x-data="{ sidebarOpen: true }" class="flex h-screen overflow-x-hidden">
      <aside
        class="flex flex-col flex-shrink-0 w-64 transition-all duration-300 border-r"
        :class="{ '-ml-64': !sidebarOpen }"
      >
        <div class="py-8 bg-gray-900 h-fit">
          <img class="m-auto" src="../img/elizalogocropper.png" alt="logo" />
        </div>
        <nav class="flex flex-col gap-8 pt-12 mx-auto text-2xl max-w-fit">
          <a href="" class="flex gap-4"><i class="fa-thin fa-home"></i>home </a
          ><a href="" class="flex gap-4"><i class="fa-thin fa-shop"></i>shop</a
          ><a href="" class="flex gap-4"
            ><i class="fa-thin fa-circle-info"></i>support</a
          ><a href="" class="flex gap-4"
            ><i class="fa-thin fa-basket-shopping-simple"></i>cart</a
          ><a href="" class="flex gap-4"
            ><i class="fa-thin fa-comment-dots"></i>contact</a
          >
        </nav>
      </aside>
      <div class="flex-1">
        <header
          class="flex items-center p-4 text-gray-100 bg-gray-900 text-semibold"
        >
          <button class="p-1 mr-4" @click="sidebarOpen = !sidebarOpen">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
          Header
        </header>
        <main class="my-8">