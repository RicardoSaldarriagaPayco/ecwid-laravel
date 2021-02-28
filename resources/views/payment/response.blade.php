<div>

<?php
  echo('
  <style>
      .epayco-title{
          max-width: 900px;
          display: block;
          margin:auto;
          color: #444;
          font-weight: 700;
          margin-bottom: 25px;
      }
      .loader-container{
          position: relative;
          padding: 20px;
          color: #ff5700;
      }
      .epayco-subtitle{
          font-size: 14px;
      }
      .epayco-button-render{
          transition: all 500ms cubic-bezier(0.000, 0.445, 0.150, 1.025);
          transform: scale(1.1);
          box-shadow: 0 0 4px rgba(0,0,0,0);
      }
      .epayco-button-render:hover {
          /*box-shadow: 0 0 4px rgba(0,0,0,.5);*
          transform: scale(1.2);
      }
      .animated-points::after{
          content: "";
          animation-duration: 2s;
          animation-fill-mode: forwards;
          animation-iteration-count: infinite;
          animation-name: animatedPoints;
          animation-timing-function: linear;
          position: absolute;
      }
      .animated-background {
          animation-duration: 2s;
          animation-fill-mode: forwards;
          animation-iteration-count: infinite;
          animation-name: placeHolderShimmer;
          animation-timing-function: linear;
          color: #f6f7f8;
          background: linear-gradient(to right, #7b7b7b 8%, #999 18%, #7b7b7b 33%);
          background-size: 800px 104px;
          position: relative;
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }
      .loading::before{
          -webkit-background-clip: padding-box;
          background-clip: padding-box;
          box-sizing: border-box;
          border-width: 2px;
          border-color: currentColor currentColor currentColor transparent;
          position: absolute;
          margin: auto;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          content: " ";
          display: inline-block;
          background: center center no-repeat;
          background-size: cover;
          border-radius: 50%;
          border-style: solid;
          width: 30px;
          height: 30px;
          opacity: 1;
          -webkit-animation: loaderAnimation 1s infinite linear,fadeIn 0.5s ease-in-out;
          -moz-animation: loaderAnimation 1s infinite linear, fadeIn 0.5s ease-in-out;
          animation: loaderAnimation 1s infinite linear, fadeIn 0.5s ease-in-out;
      }
      @keyframes animatedPoints{
          33%{
              content: "."
          }
          66%{
              content: ".."
          }
          100%{
              content: "..."
          }
      }
      @keyframes placeHolderShimmer{
          0%{
              background-position: -800px 0
          }
          100%{
              background-position: 800px 0
          }
      }
      @keyframes loaderAnimation{
          0%{
              -webkit-transform:rotate(0);
              transform:rotate(0);
              animation-timing-function:cubic-bezier(.55,.055,.675,.19)
          }
          50%{
              -webkit-transform:rotate(180deg);
              transform:rotate(180deg);
              animation-timing-function:cubic-bezier(.215,.61,.355,1)
          }
          100%{
              -webkit-transform:rotate(360deg);
              transform:rotate(360deg)
          }
      }
  </style>

  ');

echo sprintf('
      <div class="loader-container">
          <div class="loading"></div>
      </div>
      <p style="text-align: center;" class="epayco-title">
          <span class="animated-points">Cargando metodos de pago</span>
         <br><small class="epayco-subtitle"></small>
      </p>                        

      <form id="epayco_form" style="text-align: center;">
          <script src="https://checkout.epayco.co/checkout.js"
          class="epayco-button"
          data-epayco-key="%s"
          data-epayco-amount="%s"
          data-epayco-tax="%s"
          data-epayco-tax-base="%s"    
          data-epayco-name="%s"
          data-epayco-description="%s"
          data-epayco-currency="%s"
          data-epayco-invoice="%s"
          data-epayco-country="%s"
          data-epayco-test="%s"
          data-epayco-external="true"
          data-epayco-acepted="%s"
          data-epayco-rejected="%s"
          data-epayco-pending="%s"
          data-epayco-confirmation="%s"
          data-epayco-email-billing="%s"
          data-epayco-name-billing="%s"
          data-epayco-address-billing="%s"
          data-epayco-lang="%s"
          data-epayco-mobilephone-billing="%s"
          data-epayco-extra1="%s"
          data-epayco-extra2="%s"
          data-epayco-extra3="%s"
          data-epayco-extra4="%s"
          data-epayco-button="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/btn4.png"
          data-epayco-autoclick="false"
          >
      </script>
  </form>
',$public_key,$x_amount,'0',$x_amount, $x_description, $x_description, $x_currency, $ref_payco, $x_county, $payco_test, 
$url_response_acepted,$url_response_rejected,$url_response_pending,$uri2,$x_email_billing,$name_billing,
  $x_customer_billing_address1,'ES',$phone_billing,"Ecwid",$extra2,$extra3,$extra4);
?>
</div>
