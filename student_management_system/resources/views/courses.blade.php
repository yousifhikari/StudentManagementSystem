<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./public/tailwind.css" />
    <script src="../path/to/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
</head>
<body>
  <div class="container">
    <div class="flex">
      <div class="flex w-2/5 md:w-1/4 h-screen bg-white">
        <div class="mx-auto py-10">
          <a href="/"><h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">YOUSIF</h1></a>
          <ul>
            <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              <span onclick="window.location.href='/'" class="font-semibold">Home</span>
            </li>
            <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span onclick="window.location.href='/courses'" class="font-semibold">Courses</span>
            </li>
            <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
              </svg>
              <span class="font-semibold">My Course</span>
            </li>
            <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <span class="font-semibold">Profile</span>
            </li>
            <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
              <span class="font-semibold">Setthing</span>
            </li>
            <button class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Learn</button>
          </ul>
        </div>
      </div>
      <main class="min-h-screen w-full">
        <nav class="flex justify-between px-10 bg-white py-6">
          <div class="flex items-center bg-gray-100 px-4 py-1 rounded-md space-x-3 w-96">
            <input type="text" name="search" id="search" placeholder="search course name" class="bg-gray-100 border-none outline-none focus:border-transparent focus:ring-0 w-full" />
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          {{-- Lohin data --}}
          <div class="flex items-center">
            <img class="w-8 rounded-full" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="Elon Musk" />
            <p>Elon Musk</p>
          </div>
        </nav>
        {{-- Pages --}}
        @if ($layout == 'index')
        <div class="bg-white rounded-md w-full">
          <div class="flex items-center justify-between pb-6">
            <div>
              <h2 class="text-gray-600 font-semibold">Courses List</h2>
            </div>
            <div class="flex items-center justify-between">
                <div class="lg:ml-40 ml-10 space-x-8">
                  <button onclick="window.location.href='/course/create'" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New Course</button>
                </div>
              </div>
            </div>
            <div>
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                    <thead>
                      <tr>
                        <th
                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                          Name
                        </th>
                        <th
                          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                          Code
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($courses as $course)
                        <tr>
                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                              <div class="ml-3"> <a href="/show/{{$course->id}}">
                                <p class="text-gray-900 hover:text-red-600 whitespace-no-wrap">
                                  {{$course->c_name}}
                                </p>
                              </a>
                              </div>
                            </div>
                          </td>
                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{$course->code}}
                            </p>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          {{-- @elseif($layout == 'show')
            <a href="/"><i class="fa fa-close hover:text-red-500" style="font-size: 25px"></i></a>
            @include('components.show_student') --}}
          
          @elseif($layout == 'create')
          <a href="/courses"><i class="fa fa-close hover:text-red-500" style="font-size: 25px"></i></a>
            <section>
              @include('components.add_courses')
            </section>
          
          {{-- @elseif($layout == 'edit')
          <a href="/"><i class="fa fa-close hover:text-red-500" style="font-size: 25px"></i></a>
          <section>
            @include('components.update_student')
          </section> --}}
          @endif
      </main>
    </div>
  </div>
  <script type="text/javascript">
        $('#search').on('keyup',function(){
          $value=$(this).val();
          $.ajax({
            type : 'get',
            url : '{{URL::to('searchc')}}',
            data:{'search':$value},
            success:function(data){
              $('tbody').html(data);
            }
          });
        })
      </script>
      <script type="text/javascript">
      $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
      </script>
</body>
</html>