<div>
  <!--<label id="location-label" class="block text-sm font-medium text-gray-900">Select Location</label>-->
  <div class="relative mt-2">
    <!-- Button to trigger the dropdown -->
    <button type="button" id="dropdown-button" class="w-full cursor-pointer rounded-md bg-white py-2 pl-3 pr-4 text-left text-gray-900 shadow-md border border-gray-300 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50">
      <span class="block truncate">Select a Location</span>
      <svg class="w-5 h-5 text-gray-500 ml-2 inline-block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
      </svg>
    </button>

    <!-- Dropdown list, hidden by default, shown when button is clicked -->
    <ul id="location-dropdown" class="absolute left-0 z-10 hidden mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-2 text-base shadow-lg ring-1 ring-black/5 focus:outline-none sm:text-sm">
      <li class="relative cursor-pointer select-none py-2 px-3 text-gray-900 hover:bg-indigo-100 hover:text-indigo-600" role="option" data-location="Select location">
        <span class="block truncate">Unselect</span>
      </li>
      <li class="relative cursor-pointer select-none py-2 px-3 text-gray-900 hover:bg-indigo-100 hover:text-indigo-600" role="option" data-location="Harrogate">
        <span class="block truncate">Harrogate</span>
      </li>
      <li class="relative cursor-pointer select-none py-2 px-3 text-gray-900 hover:bg-indigo-100 hover:text-indigo-600" role="option" data-location="Sheffield">
        <span class="block truncate">Sheffield</span>
      </li>
      <li class="relative cursor-pointer select-none py-2 px-3 text-gray-900 hover:bg-indigo-100 hover:text-indigo-600" role="option" data-location="Leeds">
        <span class="block truncate">Leeds</span>
      </li>
      <!-- Add more locations as needed -->
    </ul>
  </div>
</div>

<!-- JavaScript to handle dropdown visibility and selection -->
<script>
  const dropdownButton = document.getElementById('dropdown-button');
  const locationDropdown = document.getElementById('location-dropdown');

  // Toggle dropdown visibility on button click
  dropdownButton.addEventListener('click', () => {
    locationDropdown.classList.toggle('hidden');
  });

  // Handle location selection
  locationDropdown.addEventListener('click', (event) => {
    if (event.target && event.target.closest('li')) {
      const selectedLocation = event.target.closest('li').dataset.location;
      dropdownButton.querySelector('span').textContent = selectedLocation;
      locationDropdown.classList.add('hidden'); // Hide the dropdown after selection
    }
  });

  // Close the dropdown if clicked outside
  document.addEventListener('click', (event) => {
    if (!dropdownButton.contains(event.target) && !locationDropdown.contains(event.target)) {
      locationDropdown.classList.add('hidden');
    }
  });
</script>
