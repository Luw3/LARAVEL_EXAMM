<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center; /* Center all text */
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #000000;
        }
        h2 {
            color: #000000;
            text-align: center; /* Center section titles */
        }
        h3 {
            color: #000000;
            text-align: left; /* Center section titles */
        }
        .contact {
            margin: 10px 0;
            font-size: 14px;
        }
        .section {
            margin-bottom: 20px;
            text-align: left; /* Keep section text left-aligned */
        }
        .section ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .section li {
            margin-bottom: 5px;
        }
        .date {
            float: right;
            font-style: italic;
        }
        .date1 {
            float: right;
            font-style: italic;
            font-weight: lighter;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$data['name']}}</h1>
        <div class="contact">
            <p>{{$data['contact']}}</p>
        </div>
        <div class="section">
            <h2>Education</h2>
            <h3>Baliwag Polytechnic College <span class="date1">Baliwag Bulacan</span></h3>
            <p>{{$data['Education1']}} <span class="date">2020----</span></p>
            <h3>Asian Institute of Science and Technology<span class="date1">Baliwag Bulacan</span></h3>
            <p>{{$data['Education2']}} <span class="date">2018-2020</span></p>
        </div>
        <div class="section">
            <h2>Experience</h2>
            <h3>{{$data['Experience1']}}<span class="date1">Baliwag Bulacan</span></h3>
            <p>{{$data['Experience2']}}<span class="date">2022-2023</span></p>
            <ul>
                <li>Maintained cleanliness and organization of dining area, ensuring a welcoming atmosphere.</li>
                <li>Engaged with customers to enhance their dining experience and resolve any concerns promptly.</li>
                <li>Worked collaboratively with team members to streamline operations and improve efficiency.</li>
            </ul>
            <h3>Church Organization <span class="date1">Santo Cristo, Bulacan</span></h3>
            <p>Cell Leader <span class="date">2018-2020</span></p>
            <ul>
                <li>Speaking and preaching to the people.</li>
                <li>Led weekly youth group meetings to foster spiritual growth and community engagement.</li>
                <li>Encouraged collaboration among various church ministries.</li>
            </ul>
        </div>
        <div class="section">
            <h2>Leadership & Activities</h2>
            <h3>Rise Up Christian Family Church<span class="date1">San Jose Baliwag, Bulacan</span></h3>
            <p>Cell Leader <span class="date">2018-2020</span></p>
            <ul>
                <li>{{$data['Skill']}}</li>
            </ul>
        </div>
        <div class="section">
            <h2>Skills & Interests </h2>
            <h3>Technical:</h3>
            <ul>
                <li>Online Games</li>
            </ul>
            <h3>Language:</h3>
            <ul>
                <li>Filipino, English</li>
            </ul>
            <h3>Interests:</h3>
            <ul>
                <li>Music</li>
            </ul>
            <ul>
                <li>Instruments like  Drums in phone</li>
            </ul>
            <ul>
                <li>Sports like Basketball</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</body>
</html>