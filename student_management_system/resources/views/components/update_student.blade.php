<style>
    .-z-1 {
      z-index: -1;
    }
  
    .origin-0 {
      transform-origin: 0%;
    }
  
    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }
  
    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
  </style>
  
  <div class="min-h-screen p-0 sm:p-0">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Update Student</h1>
      <form id="form" action="{{url('/update/'.$student->id)}}" method="POST">
        @csrf
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="fname"
            placeholder=" "
            value="{{$student->fname}}"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="fname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">First name</label>
          <span class="text-sm text-red-600 hidden" id="error">First name is required</span>
        </div>
        <div class="flex flex-row space-x-4">
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="mname"
              placeholder=" "
              value="{{$student->mname}}"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="mname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Middle name</label>
            <span class="text-sm text-red-600 hidden" id="error">Second name is required</span>
          </div>
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="lname"
              placeholder=" "
              required
              value="{{$student->lname}}"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="lname" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Last name</label>
            <span class="text-sm text-red-600 hidden" id="error">Last name is required</span>
          </div>
        </div>
        <div class="relative z-0 w-full mb-5">
          <input
            type="email"
            name="email"
            placeholder=" "
            required
            value="{{$student->email}}"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email address</label>
          <span class="text-sm text-red-600 hidden" id="error">Email address is required</span>
        </div>
  
        <div class="relative z-0 w-full mb-5">
          <input
            type="password"
            name="password"
            placeholder=" "
            required
            value="{{$student->password}}"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter password</label>
          <span class="text-sm text-red-600 hidden" id="error">Password is required</span>
        </div>
  
        <fieldset class="relative z-0 w-full p-px mb-5">
          <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Select grade</legend>
          <div class="block pt-3 pb-2 space-x-4">
            <label>
              <input
                type="radio"
                name="grade"
                value="1"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Grade 1
            </label>
            <label>
              <input
                type="radio"
                name="grade"
                value="2"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Grade 2
            </label>
            <label>
              <input
                type="radio"
                name="grade"
                value="3"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Grade 3
            </label>
            <label>
              <input
                type="radio"
                name="grade"
                value="4"
                class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
              />
              Grade 4
            </label>
          </div>
          <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
        </fieldset>
  
        <div class="relative z-0 w-full mb-5">
          <select
            name="blood"
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          >
            <option value="{{$student->blood}}" selected disabled hidden></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
          <label for="blood" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select blood type</label>
          <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
        </div>
  
        <div class="flex flex-row space-x-4">
            <div class="relative z-0 w-full mb-5">
              <input
                type="text"
                name="dateOfBirth"
                placeholder=" "
                onclick="this.setAttribute('type', 'date');"
                value="{{$student->dateOfBirth}}"
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
              />
              <label for="dateOfBirth" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
              <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
          </div>
          <div class="relative z-0 w-full mb-5">
            <select
              name="gender"
              value="{{$student->gender}}"
              onclick="this.setAttribute('value', this.value);"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            >
              <option value="" selected disabled hidden></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <label for="gender" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Select Gender</label>
            <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
          </div>
        </div>
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="mobile"
            placeholder=" "
            value="{{$student->mobile}}"
            class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400"><i class="fas fa-phone"></i></div>
          <label for="mobile" class="absolute duration-300 top-3 left-8 -z-1 origin-0 text-gray-500">Phone Number</label>
          <span class="text-sm text-red-600 hidden" id="error">Phone Number is required</span>
        </div>
  
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="address"
            placeholder=" "
            value="{{$student->address}}"
            class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400">city-street</div>
          <label for="address" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Address</label>
          <span class="text-sm text-red-600 hidden" id="error">Address is required</span>
        </div>
  
        <button
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-green-500 hover:bg-green-600 hover:shadow-lg focus:outline-none"
        >
          Update
        </button>
      </form>
      <button
        onclick="window.location.href='/show/{{$student->id}}'"
        type="button"
        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-red-500 hover:bg-red-600 hover:shadow-lg focus:outline-none"
      >
        Cancel
      </button>
    </div>
  </div>
  
  <script>
    'use strict'
  
    document.getElementById('button').addEventListener('click', toggleError)
    const errMessages = document.querySelectorAll('#error')
  
    function toggleError() {
      // Show error message
      errMessages.forEach((el) => {
        el.classList.toggle('hidden')
      })
  
      // Highlight input and label with red
      const allBorders = document.querySelectorAll('.border-gray-200')
      const allTexts = document.querySelectorAll('.text-gray-500')
      allBorders.forEach((el) => {
        el.classList.toggle('border-red-600')
      })
      allTexts.forEach((el) => {
        el.classList.toggle('text-red-600')
      })
    }
  </script>