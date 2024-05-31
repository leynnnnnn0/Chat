<?php require_once 'partials/head.php'; ?>
<!-- component -->
<div class="flex h-screen antialiased text-gray-800">
  <div class="flex flex-row h-full w-full overflow-x-hidden">
    <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
      <form action="/chat/index.php/chat/logout" method="POST">
      <button class="cursor-pointer flex items-center mb-2" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
          <path fill-rule="evenodd"
            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
        </svg>
        <span class="ml-2 font-bold">Log out</span>
      </button>
      </form>
      <div class="flex flex-row items-center justify-center h-12 w-full">
        <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
            </path>
          </svg>
        </div>
        <div class="ml-2 font-bold text-2xl">QuickChat</div>
      </div>
      <div class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg">
        <div class="h-20 w-20 rounded-full border overflow-hidden">
          <img src="https://avatars3.githubusercontent.com/u/2763884?s=128" alt="Avatar" class="h-full w-full" />
        </div>
        <div class="text-sm font-semibold mt-2">
          <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></div>
        <div class="text-xs text-gray-500"><?= $_SESSION['user']['username'] ?></div>
        <div class="flex flex-row items-center mt-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#87B84D" class="bi bi-circle-fill"
            viewBox="0 0 16 16">
            <circle cx="8" cy="8" r="8" />
          </svg>
          <div class="leading-none ml-1 text-xs font-bold">Active</div>
        </div>
      </div>
      <div class="flex flex-col mt-8">
        <div class="flex flex-row items-center justify-between text-xs">
          <span class="font-bold">Users</span>
          <span class="users_count flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">4</span>
        </div>
        <!-- Active Conversations container -->
        <div class="users_container flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">

        </div>
        <div class="flex flex-row items-center justify-between text-xs mt-6">
          <span class="font-bold">Archivied</span>
          <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">7</span>
        </div>
        <div class="flex flex-col space-y-1 mt-4 -mx-2">
          <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
            <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
              H
            </div>
            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
          </button>
        </div>
      </div>
    </div>
    <div class="flex flex-col flex-auto h-full p-6">
      <h1 class="font-bold text-black font-7 justify-self-center self-center">Select a chat to start</h1>
      
    </div>
  </div>
  <?php require_once 'partials/footer.php'; ?>

  <!-- <?php require_once 'components/chat_container.php' ?> -->