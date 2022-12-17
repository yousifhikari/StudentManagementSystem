<div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3x">
    <h1 class="text-xl font-bold uppercase">{{$student->fname.' '.$student->mname.' '.$student->lname}}</h1>
    <div class="mt-4 mb-10">
      <p class="text-gray-600">Course 75% completed</p>
      <div class="bg-gray-400 w-64 h-3 rounded-lg mt-2 overflow-hidden">
        <div class="bg-pink-400 w-3/4 h-full rounded-lg shadow-md"></div>
      </div>
    </div>
    <h3 class="text-s uppercase">Date of birth: <strong>{{$student->dateOfBirth}}</strong></h3>
    <h3 class="text-s uppercase">Gender: <strong>{{$student->gender}}</strong></h3>
    <h3 class="text-s uppercase">Address: <strong>{{$student->address}}</strong></h3>
    <h3 class="text-s uppercase">Mobile: <strong>{{$student->mobile}}</strong></h3>
    <h3 class="text-s uppercase">Blood type: <strong>{{$student->blood}}</strong></h3>
    <h3 class="text-s uppercase">Grade: <strong>{{$student->grade}}</strong></h3>
    <button onclick="window.location.href='/edit/{{$student->id}}'" class="bg-green-500 hover:bg-green-600 text-white py-3 px-8 mt-4 rounded text-sm font-semibold">Update</button>
    <button onclick="window.location.href='/delete/{{$student->id}}'" class="bg-red-500 hover:bg-red-600 text-white py-3 px-8 mt-4 rounded text-sm font-semibold">Delete</button>
    <h2 class="tracking-wide">
      <button onclick="window.location.href='/course/create'" class="bg-orange-400 py-3 px-8 mt-4 rounded text-sm font-semibold hover:bg-opacity-75">Go to lessons</button>
    </h2>
</div>