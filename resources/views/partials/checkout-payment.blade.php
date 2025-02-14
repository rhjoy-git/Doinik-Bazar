<script defer="" src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
<x-checkout type="bg-neutral-600 text-white">
    <div class="py-5">
        <!-- Payment Options -->
        <div class="grid w-full grid-cols-1 gap-5">
            <!-- Credit/Debit Card Option -->
            <div id="credit-card-option"
                class="flex w-full cursor-pointer items-center rounded-lg border bg-white p-4 transition-all hover:shadow-md"
                onclick="selectPaymentOption('credit-card')">
                <input class="h-5 w-5 accent-purple-900 focus:ring-0 focus:ring-offset-0" type="radio" name="payment" />
                <div class="ml-4 flex-1">
                    <p class="text-lg font-semibold">Credit/Debit Card</p>
                    <p class="text-sm text-gray-600">Pay with Visa, Mastercard, or other cards</p>
                </div>
                <div class="flex space-x-2">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" class="h-8 w-8" />
                    <img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="Mastercard" class="h-8 w-8" />
                    <img src="https://img.icons8.com/color/48/000000/amex.png" alt="Amex" class="h-8 w-8" />
                </div>
            </div>

            <!-- PayPal Option -->
            <div id="paypal-option"
                class="flex w-full cursor-pointer items-center rounded-lg border bg-white p-4 transition-all hover:shadow-md"
                onclick="selectPaymentOption('paypal')">
                <input class="h-5 w-5 accent-purple-900 focus:ring-0 focus:ring-offset-0" type="radio" name="payment" />
                <div class="ml-4 flex-1">
                    <p class="text-lg font-semibold">PayPal</p>
                    <p class="text-sm text-gray-600">Securely pay with your PayPal account</p>
                </div>
                <img src="https://img.icons8.com/color/48/000000/paypal.png" alt="PayPal" class="h-8 w-8" />
            </div>

            <!-- Mobile Banking Section -->
            <div id="mobile-banking"
                class="flex w-full flex-col rounded-lg border bg-white p-4 transition-all hover:shadow-md"
                onclick="selectPaymentOption('mobile-banking')">
                <div class="flex w-full cursor-pointer items-center">
                    <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio"
                        name="payment" />
                    <div class="ml-4 flex-1">
                        <p class="text-lg font-semibold">Mobile Banking</p>
                        <p class="text-sm text-gray-600">Pay with Bkash, Nagad, or Rocket</p>
                    </div>
                    <img src="https://img.icons8.com/color/48/000000/mobile-payment.png" alt="Mobile Banking"
                        class="h-8 w-8" />
                </div>
            </div>

            <!-- Add New Card Option -->
            <div id="add-new-card-option"
                class="flex w-full cursor-pointer items-center rounded-lg border bg-white p-4 transition-all hover:shadow-md"
                onclick="selectPaymentOption('add-new-card')">
                <input class="h-5 w-5 accent-purple-900 focus:ring-0 focus:ring-offset-0" type="radio" name="payment" />
                <div class="ml-4 flex-1">
                    <p class="text-lg font-semibold">Add New Card</p>
                    <p class="text-sm text-gray-600">Save a new card for future payments</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </div>
        </div>

        <!-- Credit/Debit Card Sub-Section -->
        <div id="credit-card-subsection" class="mt-6 hidden rounded-lg border bg-white p-6 shadow-sm">
            <h3 class="mb-4 text-xl font-semibold">Saved Cards</h3>
            <!-- Saved Cards List -->
            <div id="saved-cards-list" class="mb-6">
                <!-- Saved Card 1 -->
                <div class="mb-4 flex items-center justify-between rounded-lg border p-4 cursor-pointer"
                    onclick="selectSavedCard(this)">
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-4">
                            <p class="font-semibold text-purple-900">Visa</p>
                            <p class="font-mono text-blue-700">1234 **** **** 5678</p>
                            <p class="text-sm text-gray-600">Expires 12/25</p>
                        </div>
                    </div>
                    <input class="h-5 w-5 accent-blue-500" type="radio" name="saved-card" />
                </div>

                <!-- Saved Card 2 -->
                <div class="mb-4 flex items-center justify-between rounded-lg border p-4 cursor-pointer"
                    onclick="selectSavedCard(this)">
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-4">
                            <p class="font-semibold text-purple-900">Mastercard</p>
                            <p class="font-mono text-blue-700">5678 **** **** 9012</p>
                            <p class="text-sm text-gray-600">Expires 06/24</p>
                        </div>
                    </div>
                    <input class="h-5 w-5 accent-blue-500" type="radio" name="saved-card" />
                </div>
            </div>

            <!-- Add New Card Form -->
            <div id="add-new-card-form" class="hidden">
                <h3 class="mb-4 text-xl font-semibold">Add New Card</h3>
                <form class="grid grid-cols-1 gap-4">
                    <!-- Card Number -->
                    <div>
                        <label for="card-number" class="block text-sm font-medium text-gray-700">Card Number</label>
                        <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456"
                            maxlength="20" x-mask="9999 9999 9999 9999"
                            class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                            required />
                    </div>

                    <!-- Cardholder Name -->
                    <div>
                        <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Cardholder
                            Name</label>
                        <input type="text" id="cardholder-name" name="cardholder-name" placeholder="Rakibul Hasan Joy"
                            class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                            required />
                    </div>

                    <!-- Expiration Date and CVC -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Expiration Date -->
                        <div>
                            <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration
                                Date</label>
                            <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY"
                                x-mask="99/99"
                                class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                                required />
                        </div>

                        <!-- CVC -->
                        <div>
                            <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                            <input type="text" id="cvc" name="cvc" placeholder="123" maxlength="3"
                                class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                                required />
                        </div>
                    </div>

                    <!-- Confirm and Pay Button -->
                    <div class="mt-4">
                        <button type="submit"
                            class="w-full rounded-md bg-blue-600 px-4 py-2.5 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-purple-900 focus:ring-offset-2">
                            Confirm and Pay
                        </button>
                    </div>
                </form>
            </div>

            <!-- No Saved Cards Message -->
            <div id="no-saved-cards-message" class="hidden">
                <p class="text-gray-600">No saved cards found. Please add a new card.</p>
                <button onclick="showAddNewCardForm()"
                    class="mt-4 rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                    Add New Card
                </button>
            </div>
        </div>

        <div id="mobile-banking-subsection" class="mt-6 hidden rounded-lg border bg-white p-6 shadow-sm">
            <!-- Mobile Banking Options -->
            <div id="mobile-banking-options" class="flex grid-cols-3 gap-4">
                <!-- Bkash -->
                <div id="bkash-option"
                    class="flex cursor-pointer items-center rounded-lg border p-3 transition-all hover:shadow-md mt-3"
                    onclick="selectMobilePaymentOption('bkash')">
                    <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio"
                        name="mobile-payment" />
                    <div class="ml-2 flex-1">
                        <p class="text-sm font-semibold">Bkash</p>
                    </div>
                    <img src="{{ asset('resources/images/bkash.png') }}" alt="Bkash" class="h-6 w-6" />
                </div>

                <!-- Nagad -->
                <div id="nagad-option"
                    class="flex cursor-pointer items-center rounded-lg border p-3 transition-all hover:shadow-md mt-3"
                    onclick="selectMobilePaymentOption('nagad')">
                    <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio"
                        name="mobile-payment" />
                    <div class="ml-2 flex-1">
                        <p class="text-sm font-semibold">Nagad</p>
                    </div>
                    <img src="{{ asset('resources/images/nagad.png') }}" alt="Nagad" class="h-6 w-6" />
                </div>

                <!-- Rocket -->
                <div id="rocket-option"
                    class="flex cursor-pointer items-center rounded-lg border p-3 transition-all hover:shadow-md mt-3"
                    onclick="selectMobilePaymentOption('rocket')">
                    <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio"
                        name="mobile-payment" />
                    <div class="ml-2 flex-1">
                        <p class="text-sm font-semibold">Rocket&nbsp;</p>
                    </div>
                    <img src="{{ asset('resources/images/rocket.png') }}" alt="Rocket" class="h-6 w-6" />
                </div>
            </div>
            <!-- Mobile Number Input -->
            <div>
                <label for="mobile-number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                <input type="tel" id="mobile-number" name="mobile-number" placeholder="01XXXXXXXXX" maxlength="11"
                    class="mt-1 block w-3/5 max-w-full rounded-md border border-gray-300 p-2.5 focus:border-blue-500 focus:ring-blue-500"
                    required />
            </div>
        </div>

        <!-- Add New Card Sub-Section -->
        <div id="add-new-card-subsection" class="mt-6 hidden rounded-lg border bg-white p-6 shadow-sm">
            <h3 class="mb-4 text-xl font-semibold">Add New Card</h3>
            <form class="grid grid-cols-1 gap-4">
                <!-- Card Number -->
                <div>
                    <label for="card-number" class="block text-sm font-medium text-gray-700">Card Number</label>
                    <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456"
                        maxlength="20" x-mask="9999 9999 9999 9999"
                        class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                        required />
                </div>

                <!-- Cardholder Name -->
                <div>
                    <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Cardholder Name</label>
                    <input type="text" id="cardholder-name" name="cardholder-name" placeholder="Rakibul Hasan Joy"
                        class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                        required />
                </div>

                <!-- Expiration Date and CVC -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Expiration Date -->
                    <div>
                        <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration
                            Date</label>
                        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY"
                            x-mask="99/99"
                            class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                            required />
                    </div>

                    <!-- CVC -->
                    <div>
                        <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                        <input type="text" id="cvc" name="cvc" placeholder="123" maxlength="3"
                            class="mt-1 block w-full rounded-md border border-gray-300 p-2.5 focus:border-purple-900 focus:ring-purple-900"
                            required />
                    </div>
                </div>

                <!-- Confirm and Pay Button -->
                <div class="mt-4">
                    <button type="submit"
                        class="w-full rounded-md bg-blue-600 px-4 py-2.5 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-purple-900 focus:ring-offset-2">
                        Confirm and Pay
                    </button>
                </div>
            </form>
        </div>

    </div>

    <div class="flex items-center justify-between w-full">
        <a href="{{route('all-products')}}" class="text-sm text-violet-900">&larr; Back to the shop</a>
        <div class="flex gap-2 justify-center lg:mx-0 mx-auto">
            <a href="#" class="bg-purple-900 px-4 py-2 text-white">Previous step</a>
            {{ $component->checkoutLink(route('checkout.payment'), 'Checkout Review') }}
        </div>
    </div>


    <script>
        let currentOption = null; // Track the currently selected option

function selectPaymentOption(option) {
  // Hide all sub-sections
  document.getElementById("credit-card-subsection").classList.add("hidden");
  document.getElementById("mobile-banking-subsection").classList.add("hidden");
  document.getElementById("add-new-card-subsection").classList.add("hidden");

  // Uncheck all radio buttons
  document.querySelectorAll('input[name="payment"]').forEach((radio) => {
    radio.checked = false;
  });
  document.querySelectorAll('input[name="mobile-payment"]').forEach((radio) => {
    radio.checked = false;
  });

  // Toggle the selected sub-section if it's clicked again
  if (currentOption === option) {
    currentOption = null; // Collapse the section
  } else {
    currentOption = option; // Expand the section

    // Show the selected sub-section and check the corresponding radio button
    if (option === "credit-card") {
      document.getElementById("credit-card-subsection").classList.remove("hidden");
      document.querySelector('#credit-card-option input[type="radio"]').checked = true;

      // Check if there are saved cards
      const savedCards = document.querySelectorAll('#saved-cards-list input[name="saved-card"]');
      if (savedCards.length === 0) {
        document.getElementById("no-saved-cards-message").classList.remove("hidden");
        document.getElementById("add-new-card-form").classList.add("hidden");
      } else {
        document.getElementById("no-saved-cards-message").classList.add("hidden");
        document.getElementById("add-new-card-form").classList.add("hidden");
        // Automatically select the first saved card if available
        savedCards[0].checked = true;
      }
    } else if (option === "paypal") {
      document.querySelector('#paypal-option input[type="radio"]').checked = true;
    } else if (option === "mobile-banking") {
      document.getElementById("mobile-banking-subsection").classList.remove("hidden");
      document.querySelector('#mobile-banking input[type="radio"]').checked = true;
    } else if (option === "add-new-card") {
      document.getElementById("add-new-card-subsection").classList.remove("hidden");
      document.querySelector('#add-new-card-option input[type="radio"]').checked = true;
    }
  }
}

function selectMobilePaymentOption(option) {
  if (document.querySelector('#mobile-banking input[type="radio"]').checked) {
    if (option === "bkash") {
      document.querySelector('#bkash-option input[type="radio"]').checked = true;
    } else if (option === "nagad") {
      document.querySelector('#nagad-option input[type="radio"]').checked = true;
    } else if (option === "rocket") {
      document.querySelector('#rocket-option input[type="radio"]').checked = true;
    }
  }
} // Function to handle selecting a saved card
        function selectSavedCard(cardElement) {
          // Uncheck all saved cards first
          document.querySelectorAll('input[name="saved-card"]').forEach((radio) => {
            radio.checked = false;
          });
      
          // Check the clicked card
          cardElement.querySelector('input[name="saved-card"]').checked = true;
      
          // Also check the main Credit/Debit Card radio button
          document.querySelector('#credit-card-option input[type="radio"]').checked = true;
        }
      
        // Function to toggle mobile banking options
        function toggleMobileBanking() {
          const mobileBankingOptions = document.getElementById("mobile-banking-options");
          mobileBankingOptions.classList.toggle("hidden");
        }
      
        // Function to show the "Add New Card" form
        function showAddNewCardForm() {
          document.getElementById("no-saved-cards-message").classList.add("hidden");
          document.getElementById("add-new-card-form").classList.remove("hidden");
        }
      
        // Add event listeners to saved card options dynamically
        document.querySelectorAll("#saved-cards-list > div").forEach((card) => {
          card.addEventListener("click", function () {
            selectSavedCard(this);
          });
        });
      
        document.getElementById("mobile-number").addEventListener("input", function (e) {
          e.target.value = e.target.value.replace(/\D/g, "").slice(0, 11); // Limit to 11 digits
        });
    </script>

</x-checkout>