<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="relative flex flex-col items-center p-4">
  <h4 class="text-xl font-medium text-slate-800">Register</h4>

  <form class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96" method="GET" action="view.php">
    <div class="mb-1 flex flex-col gap-6">
      <div class="w-full">
        <label class="block mb-2 text-sm text-slate-600">Name</label>
        <input type="text" name="name" class="w-full bg-transparent border border-slate-200 rounded-md px-3 py-2" placeholder="Your Name" required />
      </div>
      <div>
      <label class="block mb-2 text-sm text-slate-600">Gender</label>
      <div class="flex gap-10">
        <div class="inline-flex items-center">
          <label class="relative flex items-center cursor-pointer" for="male">
            <input name="gender" value="Male" type="radio" class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-slate-300 checked:border-slate-400 transition-all" id="male" checked>
            <span class="absolute bg-slate-800 w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            </span>
          </label>
          <label class="ml-2 text-slate-600 cursor-pointer text-sm" for="male">Male</label>
        </div>
        
        <div class="inline-flex items-center">
          <label class="relative flex items-center cursor-pointer" for="female">
            <input name="gender" value="Female" type="radio" class="peer h-5 w-5 cursor-pointer appearance-none rounded-full border border-slate-300 checked:border-slate-400 transition-all" id="female">
            <span class="absolute bg-slate-800 w-3 h-3 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            </span>
          </label>
          <label class="ml-2 text-slate-600 cursor-pointer text-sm" for="female">Female</label>
        </div>
      </div>
      </div>
      <div class="w-full">
        <label class="block mb-2 text-sm text-slate-600">Email</label>
        <input type="email" name="email" class="w-full bg-transparent border border-slate-200 rounded-md px-3 py-2" placeholder="Your Email" required />
      </div>
      <div class="w-full">
        <label class="block mb-2 text-sm text-slate-600">Class</label>
        <input type="text" name="class" class="w-full bg-transparent border border-slate-200 rounded-md px-3 py-2" placeholder="Your Class" required />
      </div>
    </div>
    <button class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 text-sm text-white" type="submit">
      Sign Up
    </button>
  </form>
</div>

</body>
</html>