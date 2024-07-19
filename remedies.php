<!DOCTYPE html>
<html>
<head>
<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #DBCDF0;

}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
}

.image-container {
  width: 400px;
  height: 400px;
  overflow: hidden;
  border-radius: 10px;
  margin-left: 20px;
  margin-top: -700px; /* Move the image a bit higher */
}
.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.text-container {
  flex: 1;
color: #DBCDF0;
}

.heading {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #DBCDF0;

}

.content {
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 1.6;
  color: #555;
}

.content ul {
  list-style-type: disc;
  margin-left: 20px;
}

.content li {
  margin-bottom: 10px;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.card {
  width: 120px;
  height: 150px;
  margin: 10px;
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
  border-radius: 10px;
  background-color: #f9f9f9;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s;
}

.card:hover {
  transform: scale(1.05);
}

.card img {
  width: 120px;
  height: 120px;
  margin-bottom: 5px;
  border-radius: 50%;
}

.card-text {
  font-size: 14px;
  color: #333;
  font-weight: bold;
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
  <div class="image-container">
    <img src="cramps.png" alt="Cramp Relief">
  </div>
  <div class="text-container">
    <h2 class="heading">Remedies to Ease Cramps</h2>
    <div class="content">
      <ul>
        <li>
          <strong>Use a heat patch:</strong> Using a heated patch or wrap on your abdomen can help relax the muscles of your uterus. Heat can also boost circulation in your abdomen, which can reduce pain. Electric heating pads and hot water bottles aren't as convenient to use as patches, but they're good choices if you're spending some time at home and don't need to move around much.
        </li>
        <li>
          <strong>Massage your tummy with essential oils:</strong> Oils that seem to be most effective at reducing period cramps include:
          <ul>
            <li>Lavender</li>
            <li>Sage</li>
            <li>Rose</li>
            <li>Marjoram</li>
            <li>Cinnamon</li>
            <li>Clove</li>
          </ul>
        </li>
        <li>
          <strong>Avoid caffeine and salty foods:</strong> Limit foods that can cause water retention, bloating, and discomfort, like:
          <ul>
            <li>Salty foods</li>
            <li>Caffeine</li>
            <li>Alcohol</li>
            <li>Fatty foods</li>
          </ul>
        </li>
<li>
          <strong>Stay hydrated:</strong> Drinking plenty of water can help prevent bloating, which can exacerbate period cramps. Aim to drink at least 8 glasses of water a day.
        </li>
        <li>
          <strong>Switch up your sleeping position:</strong> Some sleeping positions can relieve pressure on the abdomen and reduce cramps. Try sleeping on your back with a pillow under your knees or on your side with a pillow between your legs.
        </li>
        <li>
          <strong>Try acupressure:</strong> Applying pressure to specific points on your body can help relieve period pain. The point located three finger-widths below your navel and about one finger-width towards your belly button is often recommended for relieving menstrual cramps.
        </li>
      </ul>
      </ul>
    </div>
  </div>
</div>

<div class="card-container">
  <div class="card">
    <img src="i.jpg" alt="Card 1">
    <div class="card-text">Be Calm</div>
  </div>
  <div class="card">
    <img src="i1.jpeg" alt="Card 2">
    <div class="card-text">Happy Flow</div>
  </div>
  <div class="card">
    <img src="i2.jpeg" alt="Card 3">
    <div class="card-text">Take Rest</div>
  </div>
<a href="profile.php"><button class="btn-back">Back to Profile</button></a>

</div>
</body>
</html>
