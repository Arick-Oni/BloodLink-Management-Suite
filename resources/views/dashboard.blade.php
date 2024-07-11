<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="flex">
    <div class="w-1/4 bg-red-600 min-h-screen p-5">
      <h2 class="text-white text-2xl font-semibold mb-10">Blood Donation</h2>
      <ul>
        <li class="mb-4">
          <a href="#" class="text-white text-lg">Dashboard</a>
        </li>
        <li class="mb-4">
          <a href="#" class="text-white text-lg">Donors</a>
        </li>
        <li class="mb-4">
          <a href="#" class="text-white text-lg">Requests</a>
        </li>
        <li class="mb-4">
          <a href="#" class="text-white text-lg">Reports</a>
        </li>
        <li class="mb-4">
          <a href="#" class="text-white text-lg">Settings</a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="w-3/4 p-10">
      <h1 class="text-3xl font-semibold mb-8">Dashboard</h1>

      <!-- Donor Table -->
      <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Blood Type</th>
              <th class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Donation Date</th>
              <th class="py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
              <td class="py-2 px-4 border-b border-gray-200">A+</td>
              <td class="py-2 px-4 border-b border-gray-200">2024-06-12</td>
              <td class="py-2 px-4 border-b border-gray-200 text-green-500">Completed</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
              <td class="py-2 px-4 border-b border-gray-200">O-</td>
              <td class="py-2 px-4 border-b border-gray-200">2024-06-15</td>
              <td class="py-2 px-4 border-b border-gray-200 text-yellow-500">Pending</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>

      <!-- Recent Activities -->
      <div class="bg-white shadow-md rounded my-6 p-6">
        <h2 class="text-2xl font-semibold mb-4">Recent Activities</h2>
        <ul>
          <li class="mb-4">
            <p class="text-gray-600"><strong>John Doe</strong> donated blood on <strong>2024-06-12</strong>.</p>
          </li>
          <li class="mb-4">
            <p class="text-gray-600"><strong>Jane Smith</strong> registered for donation on <strong>2024-06-15</strong>.</p>
          </li>
          <!-- Add more activities as needed -->
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
