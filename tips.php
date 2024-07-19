<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            background-color:#FFDEE9;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .header button {
            border: none;
            background-color: transparent;
            margin-left: auto;
            cursor: pointer;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            width: 100%;
        }

        .card {
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            width: 30%;
            height: 200px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #FFC107; /* Add background color to the card */
            cursor: pointer; /* Add cursor pointer */
        }

        .card img {
            max-width: 70%; /* Set max width to 50% of the card width */
            max-height: 100%; /* Set max height to 100% of the card height */
            margin: 0 auto; /* Center the image vertically */
            border-radius: 10px;
        }

        .card h2 {
            margin: 0;
            padding: 0 10px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            flex-grow: 1; /* Allow the heading to take up remaining space */
        }

        .card:nth-child(1) {
            background-color: #C9E4DE; /* Orange */
        }

        .card:nth-child(2) {
            background-color: #C6DEF1; /* Green */
        }

        .card:nth-child(3) {
            background-color: #DBCDF0; /* Purple */
        }

        .card:nth-child(1) img {
            background-color: #C9E4DE; /* Light Orange */
        }

        .card:nth-child(2) img {
            background-color: #C6DEF1; /* Light Green */
        }

        .card:nth-child(3) img {
            background-color: #DBCDF0; /* Light Purple */
        }

        .section {
            background-color: #FFDEE9;;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .section h3 {
            margin-top: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .section p {
            font-size: 16px;
            line-height: 1.5;
        }

        .button {
            background-color: #ff6384;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            width: fit-content;
        }

        .button:hover {
            background-color: #c44569;
        }

        .dots {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .dot.active {
            background-color: #ff6384;
        }

        .period-cards {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            width: 100%;
        }

        .period-card {
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            width: 50%;
            height: 200px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #F0E6EF; /* Add background color to the card */
            cursor: pointer; /* Add cursor pointer */
        }

        .period-card img {
            max-width: 70%; /* Set max width to 50% of the card width */
            max-height: 100%; /* Set max height to 100% of the card height */
            margin: 0 auto; /* Center the image vertically */
            border-radius: 10px;
        }

        .period-card h2 {
            margin: 0;
            padding: 0 10px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            flex-grow: 1; /* Allow the heading to take up remaining space */
        }

        /* Overlay styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .overlay-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            width: 90%;
        }

        .close-btn {
            background-color: #ff6384;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        /* Different popup colors */
        .overlay-content.consume-popup {
            background-color: #C9E4DE; /* Light Orange */
        }

        .overlay-content.unhealthy-popup {
            background-color: #C6DEF1; /* Light Red */
        }

        .overlay-content.supplements-popup {
            background-color: #DBCDF0; /* Light Green */
        }

        .overlay-content.period-tips-popup {
            background-color: #F0E6EF; /* Light Green */
        }

        .overlay-content.slim-popup {
            background-color: #FCE4D6; /* Light Orange */
        }
.btn-back {
      background-color: #FF69B4;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
      display: block;
      margin: 20px auto;
      transition: background-color 0.3s ease;
    }
    .btn-back:hover {
      background-color: #FF1493;
    }
           </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Insights</h1>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left" viewBox="0 0 24 24"><path d="M19 12H5"></path><path d="M12 19l-7-7 7-7"></path></svg>
            </button>
        </div>

        <div class="cards">
            <div class="card" id="consume-card" data-overlay-id="consume-overlay">
                <img src="consume.png" alt="Food items to consume">
                <h2>Food items to consume</h2>
            </div>
            <div class="card" id="unhealthy-card" data-overlay-id="unhealthy-overlay">
                <img src="unhealthy.png" alt="Food items to limit">
                <h2>Food items to limit</h2>
            </div>
            <div class="card" id="supplements-card" data-overlay-id="supplements-overlay">
                <img src="supplements.png" alt="Supplements">
                <h2>Supplements</h2>
            </div>
        </div>

        <div class="section">
            <h3>Health Tips</h3>
            <p>Exercise and a healthy diet provide a variety of positive health effects and have a direct impact on period pain. Studies reveal that women with irregular periods may have weaker health and poor diet. Women can regulate their irregular cycle to normal by adopting natural home remedies.</p>
            <p>In addition to this, adopting lifestyle adjustments to manage stress and maintain a healthy weight may help regulate periods.</p>
        </div>

        <div class="button" id="slim-button" data-overlay-id="slim-overlay">
            How To Get Slim?
        </div>

        <div class="dots">
            <div class="dot active"></div>
            <div class="dot "></div>
            <div class="dot "></div>
        </div>

        <div class="period-section">
            <h3>Period Tips</h3>
            <div class="period-cards">
                <div class="period-card" id="delay-card" data-overlay-id="delay-overlay">
                    <img src="delay.png" alt="Period pain">
                    <h2>How to delay or stop period?</h2>
                </div>
                <div class="period-card" id="early-card" data-overlay-id="early-overlay">
                    <img src="early.png" alt="Period cramps">
                    <h2>Why is your period early?</h2>
                </div>
            </div>
        </div>
    </div>
 <!-- Overlay for Food Items to consume -->

   <div class="overlay" id="consume-overlay">
    <div class="overlay-content consume-popup">
        <button class="close-btn" onclick="closeOverlay('consume-overlay')">Close</button>
        <h3>Foods to consume During periods</h3>
        <ul>
            <li><strong>Water</strong><br>Water consumption is important at all times, but it's more important during your period. Dehydration headaches, a typical menstrual symptom, can be prevented by maintaining hydration. Water bloating and retention can be avoided by drinking plenty of water.</li>
                        <li><strong>Vegetables with leaves</strong><br>When you're on your period, especially if your menstrual flow is thick, you can see a drop in your iron levels. Dizziness, weariness, and physical pain may result from this. Your iron levels can be increased by eating leafy greens like kale and spinach.</li>
            <li><strong>Ginger</strong><br>A warm cup of ginger tea can help with some menstrual problems. Because of its anti-inflammatory properties, it helps reduce menstrual pain.</li>
            
            <li><strong>Dark Chocolate</strong><br>Dark chocolate contains magnesium, which can help alleviate cramps and improve mood during menstruation.</li>
            <li><strong>Nuts</strong><br>Nuts are a good source of healthy fats and magnesium, which can help reduce bloating and alleviate menstrual symptoms.</li>
            <li><strong>Yogurt</strong><br>Probiotic-rich yogurt can help maintain gut health and reduce bloating during menstruation.</li>
            <li><strong>Tofu</strong><br>Tofu is a good source of iron and protein, which can help maintain energy levels and replenish iron stores during menstruation.</li>
            <li><strong>Peppermint Tea</strong><br>Peppermint tea can help relax muscles and alleviate menstrual cramps.</li>
        </ul>
    </div>
</div>

    <!-- Overlay for Food Items to Limit -->
    <div class="overlay" id="unhealthy-overlay">
        <div class="overlay-content unhealthy-popup">
            <button class="close-btn" onclick="closeOverlay('unhealthy-overlay')">Close</button>
            <h3>Foods to limit During periods</h3>
            <li><strong>Salt</strong><br>
                Consuming too much salt during periods can contribute to bloating and water retention, exacerbating discomfort.</li>
            <li><strong>Caffeine</strong><br>
                Caffeine can increase anxiety, irritability, and breast tenderness during periods, and may disrupt sleep patterns.</li>
            <li><strong>Sugary snacks</strong><br>
                High-sugar foods can lead to energy crashes and exacerbate mood swings during periods.</li>
            <li><strong>Alcohol</strong><br>
                Alcohol can disrupt hormonal balance, worsen menstrual cramps, and contribute to dehydration.</li>
            <li><strong>Processed foods</strong><br>
                Processed foods often contain high levels of salt, sugar, and unhealthy fats, which can worsen period symptoms.</li>
            <li><strong>Fatty foods</strong><br>
                Foods high in unhealthy fats can contribute to inflammation and increase discomfort during periods.</li>
            <li><strong>Hot foods</strong><br>
                Spicy or hot foods can potentially aggravate stomach and digestive discomfort during periods.</li>
            <li><strong>Red flesh</strong><br>
                Red meats and high-protein animal products may be harder to digest, potentially leading to digestive issues during periods.</li>
            <li><strong>Foods you have trouble digesting</strong><br>
                Foods that are difficult for you to digest can exacerbate digestive issues and discomfort during periods.</li>
        </ul>
        </div>
    </div>

    <!-- Overlay for Supplements -->
    <div class="overlay" id="supplements-overlay">
        <div class="overlay-content supplements-popup">
            <button class="close-btn" onclick="closeOverlay('supplements-overlay')">Close</button>
            <h3>Supplements During periods</h3>
            <ul>
                <li><strong>Iron</strong><br>
                    Iron supplements can help replenish iron stores depleted during menstruation, reducing fatigue and supporting overall energy levels.</li>
                <li><strong>Magnesium</strong><br>
                    Magnesium supplements may help alleviate menstrual cramps and reduce water retention, promoting relaxation and easing muscle tension.</li>
                <li><strong>Zinc</strong><br>
                    Zinc supports immune function and hormonal balance, which can be beneficial during the menstrual cycle.</li>
                <li><strong>Omega-3 fatty acids</strong><br>
                    Omega-3 supplements, such as fish oil, can help reduce inflammation, alleviate menstrual pain, and support overall cardiovascular health.</li>
                <li><strong>Vitamin B complex</strong><br>
                    Vitamin B complex supplements, including B6 and B12, can help regulate mood, reduce fatigue, and support overall well-being during periods.</li>
            </ul>
        </div>
    </div>

   <!-- Overlay for How to Delay or Stop Period -->
<div class="overlay" id="delay-overlay">
    <div class="overlay-content period-tips-popup">
        <button class="close-btn" onclick="closeOverlay('delay-overlay')">Close</button>
        <h3>How to delay or stop period?</h3>
        <ul>
            <li><strong>Natural herbs which can delay your periods</strong></li>
            <ul>
                <li>Apple Cider Vinegar (ACV)</li>
                <li>Using gram lentils</li>
                <li>Gelatin</li>
                <li>Fuller's earth (Multani mitti)</li>
                <li>Mustard seeds</li>
                <li>Medicine</li>
                <ul>
                    <li><strong>Norethisterone</strong></li>
                    <li>
                        <p>Norethisterone is a synthetic progestogen hormone used to temporarily delay menstrual periods. It mimics the effects of progesterone in the body by maintaining the lining of the uterus (endometrium), thereby postponing menstruation.</p>
                        <p>It is typically prescribed in the form of oral tablets. The dosage and duration of treatment vary depending on individual circumstances and the reason for delaying menstruation.</p>
                        <p>Common side effects of Norethisterone may include nausea, headache, breast tenderness, mood changes, and breakthrough bleeding (spotting). It may not be suitable for individuals with certain medical conditions such as liver disease or a history of hormone-sensitive cancers.</p>
                        <p>Consultation with a healthcare provider is essential before using Norethisterone to discuss suitability, potential side effects, and any existing medical conditions.</p>
                    </li>
                </ul>
            </ul>
        </ul>
    </div>
</div>

<!-- Overlay for Why is Your Period Early? -->
<div class="overlay" id="early-overlay">
    <div class="overlay-content period-tips-popup">
        <button class="close-btn" onclick="closeOverlay('early-overlay')">Close</button>
        <h3>Why is your period early?</h3>
        <ul>
            <li><strong>Hormonal Imbalance:</strong> Fluctuations in estrogen and progesterone levels can lead to irregular menstrual cycles, causing periods to come early.</li>
            <li><strong>Use of Medications:</strong> Certain medications, such as hormonal contraceptives or steroids, can alter menstrual patterns and cause early periods.</li>
            <li><strong>Underweight or Overweight:</strong> Extremes in body weight can affect hormone production and disrupt menstrual cycles, leading to irregularities including early periods.</li>
            <li><strong>Unhealthy Diet:</strong> Poor nutrition and deficiencies in essential nutrients can impact hormone levels and menstrual regularity.</li>
            <li><strong>Stress:</strong> Psychological stress triggers the release of stress hormones like cortisol, which can interfere with normal hormone production and menstrual cycles.</li>
        </ul>
    </div>
</div>

   <!-- Overlay for How to Get Slim -->
<div class="overlay" id="slim-overlay">
    <div class="overlay-content slim-popup">
        <button class="close-btn" onclick="closeOverlay('slim-overlay')">Close</button>
        <h3>How To Get Slim?</h3>
        <p>Here are some tips to achieve weight loss:</p>
        <ul>
            <li><strong>Add Protein to Your Diet:</strong> Protein helps boost metabolism and reduce appetite. Include lean sources of protein like chicken, fish, tofu, and beans in your meals.</li>
            <li><strong>Reduce Consumption of Added Sugar:</strong> Cut down on sugary drinks, desserts, and snacks. Opt for natural sweeteners like honey or fruits instead.</li>
            <li><strong>Drink Water:</strong> Stay hydrated by drinking water throughout the day. It helps control cravings and supports overall health.</li>
            <li><strong>Consume Coffee:</strong> Coffee can increase metabolism and suppress appetite. Enjoy it in moderation without adding high-calorie sweeteners.</li>
            <li><strong>Skip Liquid Calories and Extras:</strong> Avoid sugary drinks, alcoholic beverages, and high-calorie condiments like mayonnaise or creamy sauces.</li>
            <li><strong>Drink Green Tea:</strong> Green tea contains antioxidants and compounds that can aid in fat burning. Enjoy it as a refreshing and calorie-free beverage.</li>
            <li><strong>Increase Your Egg Intake:</strong> Eggs are rich in protein and nutrients. They can help you feel full and satisfied, reducing overall calorie intake.</li>
            <li><strong>Get Adequate Sleep:</strong> Lack of sleep disrupts hunger hormones and metabolism. Aim for 7-9 hours of quality sleep each night to support weight loss efforts.</li>
            <li><strong>Make Mindful Eating a Habit:</strong> Pay attention to your food choices and eating habits. Practice mindful eating by slowing down, savoring each bite, and recognizing when you're full.</li>
        </ul>
    </div>
<a href="profile.php"><button class="btn-back">Back to Profile</button></a>

</div>


    <script>
        document.querySelectorAll('.card').forEach(card => {
            card.onclick = function() {
                const overlayId = this.getAttribute('data-overlay-id');
                const overlay = document.getElementById(overlayId);
                if (overlay) {
                    overlay.style.display = 'flex';
                }
            }
        });

        document.getElementById('slim-button').onclick = function() {
            const overlayId = this.getAttribute('data-overlay-id');
            const overlay = document.getElementById(overlayId);
            if (overlay) {
                overlay.style.display = 'flex';
            }
        };
// Add event listener for delay-card
document.getElementById('delay-card').onclick = function() {
    const overlayId = this.getAttribute('data-overlay-id');
    const overlay = document.getElementById(overlayId);
    if (overlay) {
        overlay.style.display = 'flex';
    }
};

// Add event listener for early-card
document.getElementById('early-card').onclick = function() {
    const overlayId = this.getAttribute('data-overlay-id');
    const overlay = document.getElementById(overlayId);
    if (overlay) {
        overlay.style.display = 'flex';
    }
};

        function closeOverlay(overlayId) {
            const overlay = document.getElementById(overlayId);
            if (overlay) {
                overlay.style.display = 'none';
            }
        }
    </script>
</body>
</html>
