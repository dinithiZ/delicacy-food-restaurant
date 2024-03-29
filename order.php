<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/order.css">
    <form action="order_submit.php">

        <div class="flex">
            <div class="inputBox">
                <span>Enter your name</span>
                <input type="text" placeholder="Enter customer's name" name="name" id="">
            </div>
            <div class="inputBox">
                <span>Enter your number</span>
                <input type="number" placeholder="Enter customer's number" name="number" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>Enter your order</span>
                <input type="text" placeholder="Enter food you want" name="item" id="">
            </div>
            <div class="inputBox">
                <span>Enter how much</span>
                <input type="number" placeholder="Enter number or orders" name="no_orders" id="">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>Enter your details</span>
                <input type="text" placeholder="Enter your message" name="message" id="">
            </div>
            <div class="inputBox">
                <span>Enter time</span>
                <input type="datetime-local" name="date">
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <textarea placeholder="Enter your address" id="" name="address" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBox">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1634657187694!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <input type="submit" value="proceed to order" class="btn">

    </form>