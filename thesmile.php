<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='thesmile_style.css'>
    <title>The Smile</title>
</head>
<body>
    <header>
    
        <div class="main-nav_section_1">
            <img src="images/logo-small.png" height="55px" width="150px">
            <div class="links">
        <ul class="main-nav_section_1">
            
            <li class="active"><a href=""  class="fa fa-home" style="font-size:18px;color:#cf925f"> HOME</a></li>
            <li><a href="contact.html" class="fa fa-envelope" style="font-size:18px;color:#cf925f"> CONTACT US</a></li>
            <li><a href="theflorist.html" class="fa fa-suitcase" style="font-size:18px;color:#cf925f"> THE FLORIST</a></li>
            <li><a href="gallery.html" class="fa fa-camera" style="font-size:18px;color:#cf925f"> GALLERY</a></li>
            <li><a href="order.html" class="fa fa-cogs" style="font-size:18px;color:#cf925f"> HOW TO ORDER</a></li>
            <li><a href="orderbyphone.html" class="fa fa-phone" style="font-size:18px;color:#cf925f"> ORDER BY PHONE</a></li>
            <li><a href="chat.html" class="fa fa-comment" style="font-size:18px;color:#cf925f"> CHAT</a></li>
        </ul>
            </div>
        </div>
    
    </header>
<!--end of header--> 

        <div class="container">

            <div class="image">
                <img src="images/the smile.jpg" style="float:left;  margin-left: 50px; margin-right: 50px; margin-top: 50px; height: 350px;
                width: 350px;" />
            <br>
            <p style="margin-left: 50px; margin-top: 50px;">
                Price (Delivery Included)<br>
                <hr style="margin-left: 50px;">
            </p>
                <label class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Standard 78.90 &euro; 
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>  
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <i class="fa fa-info-circle" style="color: maroon;" ></i>
              </label>
              

              <label class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deluxe 98.90 &euro; 
                <input type="checkbox">
                <span class="checkmark"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-info-circle" style="color: maroon;"></i>
              </label>

              <label class="price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Premium 118.90 &euro; 
                <input type="checkbox">
                <span class="checkmark"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-info-circle" style="color: maroon;"></i>
              </label>

              <div class="box">
                  Total : 78.90&euro; (delivery included)
              </div>
              <div class="last_section">
                  The Smile 78.90&euro;
              </div>
            
            </div>
            <div> 
                <p>
                   <br><br><br><span style=" font-family:Lucida Handwriting; font-size: 24px;">The Smile </span><br><br>
        <span style="font-family: Verdana;"> of roses and mixed seasonal flowers in vivid colors, decorated with greenery. Suitable
        for every occasion. Conveys joy.</span><br><br>
        <i class="fa fa-info-circle" style="color: maroon;"></i>
        Seasonal Flowers or Plants may be changed if unavailable. However, we will try to stick to the type of the
        hosen flowers as much as possible. The vase is not included. The picture usually referring the "Deluxe"
        arrangement.
                </p>
                <hr style="margin-right: 50px; ">

                <!-- <form>
                    <div class="row">
                    <div class="col-1">
                    <label for="delivery date"><b>Delivery date*</b> </label></div>
                    <div class="col-2">
                    <input type="date" id="date" name="date"> <br><br></div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                    <label for="delivery time"><b>Delivery time</b> </label></div>
                    <div class="col-2">
                    <input type="radio" id="workday" name="workday" value="">
                    <label for="workday">Working Day- free(9.00 a.m.-9.00p.m.) <i class="fa fa-info-circle" style="color: maroon;" ></i></label><br>
                    <input type="radio" id="weekend" name="weekend" value="">
                    <label for="weekend">Sunday and Public Holidays 4.00&euro; <i class="fa fa-info-circle" style="color: maroon;" ></i></label><br><br>
                  </div>      
                </div>

                    <div class="row">
                        <div class="col-1">
                    <label for="quantity"><b>Quantity*</b> </label></div>
                    <div class="col-2">
                    <input type="text" id="quantity" name="quantity"> <br><br></div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                    <label for="message"><b>Message</b> <br>Out of ideas? Choose a <br> message</label></div>
                    <div class="col-2">
                    <textarea id="message" name="message" rows="4" cols="50" >
                    </textarea>
                    <p>250 characters remaining</p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                    <label for="signature"><b>Signature</b> </label></div>
                    <div class="col-2">
                    <input type="text" id="signature" name="signature"> <br><br>
                    <p>If the messaged is not signed, it will be delivered anonymously.</p></div>
                        </div>

                    <input type="submit" value="Continue >>">
                </form> -->

                <table>
                    <tr>
                        <td><label for=""><b>Delivery date*</b></label></td>
                        <td><input type="text"></td>
                    </tr>
                    
                    <tr>
                        <td><label for=""><b>Delivery time</b></label></td>
                        <td>
                            <input type="radio">
                            <label for="">Working Day Free (9 a.m. - 9 p.m.)</label><br>
                            <input type="radio">
                            <label for="">Sunday and Public Holidays 4.00 €</label>
                        </td>
                    </tr>
                    

                    <tr>
                        <td><label for=""><b>Quantity*</b></label></td>
                        <td><input type="text" placeholder="1"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Message</b><br>Out of ideas? Choose a message!</td>
                        <td>
                            <textarea name="" id="" cols="30" rows="10"></textarea><br>
                            <p style="font-size: 13px; color: gray; margin-top: -5px;">250 characters remaining </p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Signature</td>
                        <td>
                            <input type="text"><br>
                            <p style="font-size: 13px; color: gray; margin-top: 0px;">If the messaged is not signed, it will be delivered anonymously</p>
                        </td>
                    </tr>
                   
                </table>
                <input type="submit" value="Continue >>" >
            </div>

            
            
            
        </div>
   
    
</body>
</html>