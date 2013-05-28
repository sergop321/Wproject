<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class C_profile extends CI_Controller {
	
	public function index()
	{
		$this->load->model("M_profile","data_model");
		$data = $this->data_model->Get_data();
		
		$body = " <div class='profile'>
    <div class='container'>
      <div class='span8'>
        <div class='personal_details'>
          <div class='details'>
            <div class='name'>
              <h2>משה כהן</h2>
            </div>
            <div class='email'>moshe@gmail.com</div>
            <div class='adress'>פתח תקוויה ריטב הנסגר 23</div>
            <div class='phone'>05489712331</div>
            <div class='gender'>זכר</div>
            <div class='rating'>
              <div class='seller'>דירוג משכיר: 
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
              </div>
              <div class='taker'>דירוג שוכר: 
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
                <img src='/images/start_icon16.png' class='inline' width='16' height='auto'/>
              </div>
            </div>
          </div>
          <div class='profile_image'>
            <img src='http://lorempixel.com/300/300/people' class='img-polaroid' />
          </div>
        </div>
        <div class='clear'></div>
        <div class='latest_msgs'>
          <div class='msg'>
            <div class='msg_header'>
              <i class='icon-remove'></i>
            </div>
            <div class='msg_body'>
              <div>
                שמולקים ביקש את הטלפון שלך בהודעה <a href='/post22'>הזאת</a> 
                <br>
                האם היית בינכים עיסקה?
              </div>
            </div>
            <div class='msg_actions'>
              <button type='button' class='msg_accept msg_action btn btn-success'>כן</button>
              <button type='button' class='msg_deniey msg_action btn-danger btn'>לא</button>
              <button type='button' class='msg_later msg_action btn btn-warning'>לא יצר קשר עדיין</button>
              <div class='clear'></div>
            </div>
          </div>
          <div class='msg'>
            <div class='msg_header'>
              <i class='icon-remove'></i>
            </div>
            <div class='msg_body'>
              <div>
                שמולקים ביקש את הטלפון שלך בהודעה <a href='/post22'>הזאת</a> 
                <br>
                האם היית בינכים עיסקה?
              </div>
            </div>
            <div class='msg_actions'>
              <button type='button' class='msg_accept msg_action btn btn-success'>כן</button>
              <button type='button' class='msg_deniey msg_action btn-danger btn'>לא</button>
              <button type='button' class='msg_later msg_action btn btn-warning'>לא יצר קשר עדיין</button>
              <div class='clear'></div>
            </div>
          </div>
          <div class='more_messages'>
            <a href='/messages'>לקראיית הודעות ישנות יותר לחץ כאן</a>
          </div>
        </div>
      </div>
      <div class='span3'>
        <div class='your_products side_menu'>
          <h2>מוצרים שלך</h2>
          <ul>
            <li>
              <h5><a href='/prod2354'>איפון 5</a></h5>          
            </li>
            <li>
              <h5><a href='/prod2354'>מברגה חשמלית</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>ראוטר</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>צמר גפן מתוק</a></h5>
            </li>
          </ul>
        </div>
        <div class='last_viewed side_menu'>
          <h2>המוצרים האחרונים שחיפשת</h2>
          <ul>
            <li>
              <h5><a href='/prod2354'>איפון 5</a></h5>          
            </li>
            <li>
              <h5><a href='/prod2354'>מברגה חשמלית</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>ראוטר</a></h5>
            </li>
            <li>
              <h5><a href='/prod2354'>צמר גפן מתוק</a></h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>";
		
		$this->load->view("view_template",array("tittle"=>"we share","body"=>$body));
	}
}
?>