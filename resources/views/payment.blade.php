<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/"></script>
    <script type="module" src="../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script defer src="../unpkg.com/alpinejs%403.14.1/dist/cdn.min.js"></script>
    <script nomodule src="../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/IMG_4846.png">
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('index.html')}}"> --}}

    <link rel="stylesheet" href="sccs/fa-solid">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
  <header>
    <a href="#" class="logo">A M R<span> Fitness</span></a>
    <div class='bx bx-menu' id="menu-icon"></div>
    <ul class="navbar" id="navbar">
        <li><a href="{{ url('/') }}#home">Home</a></li>
        <li><a href="{{ url('/') }}#services">Services</a></li>
        <li><a href="{{ url('/') }}#about">About Us</a></li>
        <li><a href="{{ url('/') }}#pricing">Pricing</a></li>
        <li><a href="{{ url('/') }}#review">Review</a></li>
        <li><a href="{{ url('/') }}#payment">Payment</a></li>
    </ul>


    <div class="top-btn">
        <a href="#" class="nav-btn">join us</a>
    </div>
    <!-- <img src="img/instapay.png" alt="instapay" class="w-20 mx-auto"> -->
  </header>


  <section class="container">
    <div class="card">
          <img src="img/vodacash.png" alt="vodacash" class="card-image">
          <div class="card-content">
              <div>
                  <h5 class="card-title text-center">
                      Vodafone Cash Transaction
                  </h5>
              </div>
              <div class="card-details">
                  <p class="card-text">Vodafone cash number is <br>01104595495. <br><span>After the payment or the money transfer is done, take a screenshot of the receipt and send it to the WhatsApp number:<br>01104595495</span></p>
              </div>
          </div>
          <div class="card-footer text-center">
              <button class="card-button">
                  <i class="fab fa-whatsapp"></i> <a href="#">Contact us now</a>
              </button>
          </div>
    </div>

    <div class="card" style="background-color: rgb(122, 38, 200);">
        <img src="img/instapay.png" alt="instapay" class="card-image">
        <div class="card-content">
            <div>
                <h5 class="card-title text-center" >Instapay Transaction</h5>
            </div>
            <div class="card-details" style="background-color: white;">
                <p class="card-text">Instapay transaction number is <br>01104595495. <br><span>After the payment or the money transfer is done, take a screenshot of the receipt and send it to the WhatsApp number:<br>01104595495</span></p>
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="card-button">
                <i class="fab fa-whatsapp"></i> <a href="#">Contact us now</a>
            </button>
        </div>
    </div>

    <div class="card" style="background-color: rgb(29, 27, 27);">
      <img src="img/western.png" alt="western union" class="card-image">
      <div class="card-content" >
          <div>
              <h5 class="card-title text-center" style="color: yellow;">western Union Transaction</h5>
          </div>
          <div class="card-details" style="background-color: rgb(255, 238, 0);">
              <p class="card-text" style="color: black;">To pay via Western Union, all you will need is the full name: (Amr tammam mohamed) <span>After the payment or the money transfer is done, take a screenshot of the receipt and send it to the WhatsApp number:<br>01104595495</span></p>
          </div>
      </div>
      <div class="card-footer text-center">
          <button class="card-button" style="border-color: yellow; ">
              <i class="fab fa-whatsapp"></i> <a href="#">Contact us now</a>
          </button>
      </div>
    </div>

    <div class="card" style="background-color: rgb(145, 80, 34);">
        <img src="img/bankmisr.png" alt="bankmisr" class="card-image">
        <div class="card-content">
            <div>
                <h5 class="card-title text-center">
                  Bank Transaction
                </h5>
            </div>
            <div class="card-details">
                <p class="card-text">Send us a message on whatsapp and we will send you the details <br><br><span>After the payment or the money transfer is done, take a screenshot of the receipt and send it to the WhatsApp number:<br>01104595495</span></p>
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="card-button">
                <i class="fab fa-whatsapp"></i> <a href="#">Contact us now</a>
            </button>
        </div>
    </div>
  </section>

  <section>
    <div class="form-container">
        <h1>Register Here</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="registrationForm" method="POST" action="{{ route('client.form.store') }}">
            @csrf
          <!-- Registration Section -->
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
        </div>


          <!-- Questionnaire Section -->
          <h2>Questionnaire</h2>
          <!-- Gender Selection Section -->
            <div class="form-group">
                <label for="gender">Gender</label>
                <div class="gender-options">
                <label><input type="radio" id="male" name="gender" value="male" required>Male</label>
                <label><input type="radio" id="female" name="gender" value="female" required>Female</label>
                </div>
            </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" placeholder="age.">
          </div>
          <div class="form-group">
            <label for="height">Height</label>
            <input type="text" id="height" name="height" placeholder="height" required>
          </div>
          <div class="form-group">
            <label for="current_weight">Current Weight</label>
            <input type="text" id="current_weight" name="current_weight" placeholder="Weight">
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Country">
          </div>
         <!-- Daily Calorie Intake Section -->
          <div class="form-group">
                <label for="calorie-intake">How many calories do you consume daily?</label>
                <select id="calorie-intake" name="calorie_intake" required>
                  <option value="" disabled selected>Select an option</option>
                  <option value="under2000">Under 2000 calories</option>
                  <option value="over2000">Over 2000 calories</option>
                  <option value="over3000">Over 3000 calories</option>
                </select>
           </div>

          <!-- Medical Conditions or Injuries Section -->
            <div class="form-group">
                <label for="medical-conditions">Do you have any medical conditions or injuries we should be aware of?</label>
                <textarea
                id="medical-conditions"
                name="medical_conditions"
                rows="4"
                placeholder="Please provide details (e.g., diabetes, back pain, high blood pressure, etc.)"
                required
                ></textarea>
            </div>

            <div class="form-group">
                <label for="dietary-restrictions">Do you have any food allergies or dietary restrictions?</label>
                <textarea
                id="dietary-restrictions"
                name="dietary-restrictions"
                rows="4"
                placeholder="Please specify any allergies or dietary preferences (e.g., gluten-free, vegan, etc.."
                required
                ></textarea>
            </div>

            <!-- Fitness Goals Section -->
            <div class="form-group">
                <label for="fitness-goals">What are your primary fitness goals?</label>
                <textarea
                    id="fitness-goals"
                    name="fitness_goals"
                    rows="4"
                    placeholder="Please provide details (e.g., lose weight, build muscle, improve endurance, etc.)"
                    required
                ></textarea>
            </div>




            <div class="form-group">
                <label for="meals-per-day">How many meals do you typically eat per day?</label>
                <select id="meals-per-day" name="meals_per_day" required>
                    <option value="">Select an option</option>
                    <option value="1">1 meal</option>
                    <option value="2">2 meals</option>
                    <option value="3">3 meals</option>
                    <option value="4">4 meals</option>
                    <option value="more-than-four">More than 4 meals</option>
                </select>
            </div>



            <div class="form-group">
                <label for="exercise-days">How many days per week do you currently exercise?</label>
                <select id="exercise-days" name="exercise_days" required>
                    <option value="">Select an option</option>
                    <option value="1">1 day</option>
                    <option value="2">2 days</option>
                    <option value="3">3 days</option>
                    <option value="4">4 days</option>
                    <option value="5">5 days</option>
                    <option value="6">6 days</option>
                    <option value="7">7 days</option>
                </select>
            </div>




            <div class="form-group">
                <label for="exercise-types">What types of exercise do you usually do?</label>
                <textarea
                    id="exercise-types"
                    name="exercise_types"
                    rows="4"
                    placeholder="Please list the types of exercise (e.g., running, yoga, weightlifting)"
                    required
                ></textarea>
            </div>



            <div class="form-group">
                <label for="event-preparation">Are you preparing for a specific event (e.g., marathon, competition)?</label>
                <select id="event-preparation" name="event_preparation" required>
                    <option value="">Select an option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>



            <div class="form-group">
                <label for="occupation">What is your occupation? (to understand daily activity levels)</label>
                <input type="text" id="occupation" name="occupation" placeholder="e.g., Office worker, Student, Construction worker" required>
            </div>



            <div class="form-group">
                <label for="sitting-hours">How many hours a day do you spend sitting?</label>
                <input type="number" id="sitting-hours" name="sitting_hours" min="0" max="24" placeholder="e.g., 8" required>
            </div>


          <div class="form-group">
            <label for="comments">Any specific requirements?</label>
            <textarea id="comments" name="comments" rows="4" placeholder="Write your requirements here..."></textarea>
          </div>


          <div class="form-group">
            <label for="water-intake">How much water do you drink daily? (in liters/ounces)</label>
            <input type="text" id="water-intake" name="water_intake" placeholder="e.g., 2 liters, 64 ounces" required>
        </div>


        <div class="form-group">
            <label for="sleep-hours">How many hours of sleep do you get each night?</label>
            <input type="number" id="sleep-hours" name="sleep_hours" min="0" max="24" placeholder="e.g., 7" required>
        </div>


        <div class="form-group">
            <label for="motivation">What motivates you to stay consistent with your fitness goals?</label>
            <textarea id="motivation" name="motivation" rows="4" placeholder="e.g., personal goals, health, competition" required></textarea>
        </div>



        <div class="form-group">
            <label for="workout-preference">Do you prefer working out at home, outdoors, or in a gym?</label>
            <select id="workout-preference" name="workout_preference" required>
                <option value="">Select an option</option>
                <option value="home">At home</option>
                <option value="outdoors">Outdoors</option>
                <option value="gym">In a gym</option>
            </select>
        </div>




        <div class="form-group">
            <label for="gym-equipment">Do you have access to gym equipment or fitness tools at home?</label>
            <select id="gym-equipment" name="gym_equipment" required>
                <option value="">Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>



        <div class="form-group">
            <label for="challenges">What challenges have you faced in maintaining a fitness routine in the past?</label>
            <textarea id="challenges" name="challenges" rows="4" placeholder="e.g., lack of time, motivation, injuries" required></textarea>
        </div>



        <div class="form-group">
            <label for="disliked-exercises">Are there any specific exercises or activities you dislike?</label>
            <textarea id="disliked-exercises" name="disliked_exercises" rows="4" placeholder="e.g., running, burpees, squats" required></textarea>
        </div>



        <div class="form-group">
            <label for="busy-schedule">Do you have a busy schedule that may affect your workout time? If yes, what are your preferred workout hours?</label>
            <textarea id="busy-schedule" name="busy_schedule" rows="4" placeholder="e.g., evenings, mornings, lunch break" required></textarea>
        </div>



        <div class="form-group">
            <label for="expectations">What do you expect from a fitness coach or training program?</label>
            <textarea id="expectations" name="expectations" rows="4" placeholder="e.g., personalized plans, motivation, nutrition advice" required></textarea>
        </div>



        <div class="form-group">
            <label for="body-focus">Are there any specific areas of the body you’d like to focus on?</label>
            <textarea id="body-focus" name="body_focus" rows="4" placeholder="e.g., arms, abs, legs, back" required></textarea>
        </div>


        <div class="form-group">
            <label for="additional-info">Is there anything else you'd like to share to help us customize your fitness plan?</label>
            <textarea id="additional-info" name="additional_info" rows="4" placeholder="e.g., other health conditions, preferences" required></textarea>
        </div>

            <button type="submit">Submit</button>
        </form>
      </div>
  </section>

  <script>
    function toggleMenu() {
      const navbar = document.getElementById("navbar");
      navbar.classList.toggle("active");
    }
  </script>


      <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
      <script src="index.js"></script>
</body>
</html>
