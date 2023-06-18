<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1,
        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .full-screen {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .events {
            width: 100%;
            margin: 0;
            padding: 0;
            list-style: none;
            font-size: 18px;
            line-height: 1.5;
        }

        .event-item {
            display: flex;
            margin-bottom: 20px;
        }

        .event-date {
            width: 80px;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .event-details {
            margin-left: 20px;
        }

        .event-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .event-description {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .event-info {
            font-size: 14px;
            color: #777;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <h2>Upcoming Events</h2>
            <ul class="events">
                <li class="event-item">
                    <div class="event-date">May 10</div>
                    <div class="event-details">
                        <div class="event-title">Guest Lecture: Career Opportunities in Technology</div>
                        <div class="event-description">Join us for a guest lecture on various career opportunities in
                            the technology industry.</div>
                        <div class="event-info">
                            <span>Time: 10:00 AM - 12:00 PM</span>
                            <span>Location: Room 101</span>
                        </div>
                    </div>
                </li>
                <li class="event-item">
                    <div class="event-date">May 15</div>
                    <div class="event-details">
                        <div class="event-title">Workshop: Time Management Skills</div>
                        <div class="event-description">Learn effective time management techniques and strategies to
                            boost your productivity.</div>
                        <div class="event-info">
                            <span>Time: 2:00 PM - 4:00 PM</span>
                            <span>Location: Conference Room B</span>
                        </div>
                    </div>
                </li>
                <li class="event-item">
                    <div class="event-date">May 20</div>
                    <div class="event-details">
                        <div class="event-title">Field Trip: Museum Visit</div>
                        <div class="event-description">Explore the history and culture of our city with a visit to the
                            local museum.</div>
                        <div class="event-info">
                            <span>Time: 9:00 AM - 1:00 PM</span>
                            <span>Location: City Museum</span>
                        </div>
                    </div>
                </li>
                <li class="event-item">
                    <div class="event-date">May 25</div>
                    <div class="event-details">
                        <div class="event-title">Social Event: Movie Night</div>
                        <div class="event-description">Relax and enjoy a movie night with your fellow students.</div>
                        <div class="event-info">
                            <span>Time: 7:00 PM - 10:00 PM</span>
                            <span>Location: Student Lounge</span>
                        </div>
                    </div>
                </li>
            </ul>

        </div>