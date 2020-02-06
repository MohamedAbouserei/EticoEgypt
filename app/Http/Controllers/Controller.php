<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Nutritionfact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Validator;
use Redirect;
use App\Group;
use App\Child;
use App\Comment;
use App\Recipe;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function aboutus(Request $request)
    {
        return view('frontend.about-us');

    }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function groups(Request $request)
    {
        return view('frontend.groups');

    }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function children(Request $request,$id)
    {
        $children=Child::find($id);
        $groups=Group::orderBy('updated_at','DESC')->get();
        $comments=$children->Comment->sortByDesc('updated_at');

        return view('frontend.children',compact('children','groups','comments'));

    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function recipe(Request $request)
    {
        $recipes=Recipe::orderby('updated_at','DESC')->paginate(6);

        return view('frontend.recipes',compact('recipes'));

    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function healthfacts(Request $request)
{
  $nutritionfact=Nutritionfact::orderBy('updated_at','DESC')->paginate(6);

  return view('frontend.healthfacts',compact('nutritionfact'));
}
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function contact(Request $request)
{

  return view('frontend.contact');
}
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function group_child(Request $request)
{
  $children=Child::orderBy('updated_at','DESC')->paginate(5);
  $groups=Group::orderBy('updated_at','DESC')->get();

  return view('frontend.group-child',compact('children','groups'));
}
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function ajaxfilt(Request $request)
{

  if ($request->ajax()) {
    $output="";
    $products=Child::where('name', 'like', '%' .$request->name. '%')->orderBy('updated_at','DESC')->get();
    if ($products) {
        foreach ($products as $item) {
            $output.='<div class="single-post row">
            <div class="col-lg-3  col-md-3 meta-details">

                <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">"'.$item->Group->name.'"</a> <span
                            class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">"'.$item->updated_at.'""</a> <span
                            class="lnr lnr-calendar-full"></span></p>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">"'.count($item->Comment).'"
                            Comments</a> <span class="lnr lnr-bubble"></span></p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 ">
                <div class="feature-img">';


                    $output.='
                    </div>
                <a href="children/'.$item->id.'" class="posts-title" href="blog-single.html">
                    <h3>"'.$item->name.'"</h3>
                </a>
                <a href="children/'.$item->id.'" class="primary-btn">View More</a>
            </div>
        </div><hr>';

        }
        return Response($output);
    }
    else
    {
        $products=Child::orderBy('updated_at','DESC')->get();
foreach ($products as $item) {
            $output.='<div class="single-post row">
            <div class="col-lg-3  col-md-3 meta-details">

                <div class="user-details row">
                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">"'.$item->Group->name.'"</a> <span
                            class="lnr lnr-user"></span></p>
                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">"'.$item->updated_at.'""</a> <span
                            class="lnr lnr-calendar-full"></span></p>
                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">"'.count($item->Comment).'"
                            Comments</a> <span class="lnr lnr-bubble"></span></p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 ">
                <div class="feature-img">';


                    $output.='
                    </div>
                <a href="/children/"'.$item->id.'"" class="posts-title" href="blog-single.html">
                    <h3>"'.$item->name.'"</h3>
                </a>
                <a href="/children/"'.$item->id.'"" class="primary-btn">View More</a>
            </div>
        </div>';
        }
        return Response($output);

    }
}

}
 /**
     * Display a specfic  resource.
     *
     * @return \Illuminate\View\View
     */
    public function groupfilter($id)
{
  $children=Child::where('category',$id)->orderBy('updated_at','DESC')->paginate(5);

  $groups=Group::orderBy('updated_at','DESC')->get();
  return view('frontend.group-child',compact('children','groups'));
}

 /**
     *add comment.
     *
     * @return \Illuminate\View\View
     */
    public function addcomment(Request $request,$id)
{
    $validate = Validator::make($request->all(), [
        'email' => 'required|email',
        'name' => 'required|string|min:3',
        'subject' => 'required|string|min:3',
        'message' => 'required|string|min:3',
        'child_id'=>'required|numeric|exists:children,id',
    ]);
    if ($validate->fails()) {
        $errors = $validate->errors();
        return $errors;
    }
    $requestData = $request->all();

    Comment::create($requestData);

  return redirect()->back()->with('flash_message', __('flash_message.Comment Added '));
}


/**
     * send mails.
     *
     * @return msg
     *
     *   */

public function sendEmail(Request $request)
{
    $validate = Validator::make($request->all(), [
        'email' => 'required|email',
        'name' => 'required|string|min:3',
        'subject' => 'required|string|min:3',
        'message' => 'required|string|min:3',
    ])->validate();
    try {
        if ($request->email) {

    $to = "info@eticoegypt.com";
    $from = $request->email;
    $name = $request->name;
    $csubject = $request->subject;
    $cmessage = $request->message;

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Etico.";


	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $mail = new PHPMailer();
                $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
            );
                //$mail->SMTPDebug = 2;                                  // Enable verbose debug output

                $mail->isSMTP();
                $mail->Mailer = "sendmail";
                $mail->SMTPDebug = 2;                            // Set mailer to use SMTP
             $mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
             $mail->SMTPAuth = true;                               // Enable SMTP authentication
             $mail->Username = 'emeraldinternationaltrading@gmail.com';                 // SMTP username
             $mail->Password = 'etico1511';                           // SMTP password
             $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
             $mail->Port = 587;                                    // TCP port to connect to

             $mail->setFrom($mail->Username);
                $mail->addAddress($to);     // Add a recipient
                $mail->addReplyTo($mail->Username);
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->isSMTP();

                $mail->Subject = $subject;
                $mail->Body    = $body;
                // check email send or not
                if ($mail->send()) {
                    return  Redirect::back()->with('success', 'Mail_Sent');
                } else {
                    return  Redirect::back()->with('error', 'Mail_Not_Sent');
                }
            } else {
                return  Redirect::back()->with('error', 'Mail_Not_Found');
            }

    ///$send = mail($to, $subject, $body, $headers);

    } catch (Exception $e) {
        return  Redirect::back()->with('error', 'error send mail');
    }
}
}
