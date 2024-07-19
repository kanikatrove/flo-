<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
       .circle {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px auto;
        }
        
       .day {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            position: absolute;
            top: 50px;
            left: 125px;
        }
        
       .numbers {
            position: absolute;
            top: 50px;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotate(-90deg);
        }
        
       .numbers span {
            display: block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="circle">
        <div class="day">31</div>
        <div class="numbers">
            <span>28</span>
            <span>27</span>
            <span>26</span>
            <span>25</span>
            <span>24</span>
            <span>23</span>
            <span>22</span>
            <span>21</span>
            <span>20</span>
            <span>19</span>
            <span>18</span>
            <span>17</span>
            <span>16</span>
            <span>15</span>
            <span>14</span>
            <span>13</span>
            <span>12</span>
            <span>11</span>
            <span>10</span>
            <span>9</span>
            <span>8</span>
            <span>7</span>
            <span>6</span>
            <span>5</span>
            <span>4</span>
            <span>3</span>
            <span>2</span>
            <span>1</span>
        </div>
    </div>
</body>
</html>