<x-layout>

  @include('clients._sidebar')
  <style>
    .centered {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Custom styling for accordion buttons */
    .accordion-button {
      color: #000;
      background-color: #fff;
    }

    .accordion-button:hover {
      color: #fff;
      background-color: #007bff;
    }

    /* Custom styling for SERVICES title */
    .card-title.services {
      font-size: 24px;
      font-weight: bold;
    }

    /* Responsive styles for the card */
    @media (max-width: 768px) {
      .card {
        width: 100%;
        margin: 0;
        border-radius: 0;
        border: none;
        box-shadow: none;
      }
    }
  </style>

  <section class="section d-flex justify-content-center">

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title services">Services</h5>  
                <!-- Default Accordion -->
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <strong>Official Transcript of Records</strong> 
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        
                          <li>Receipt of payment form Cashier's Office - ₱ 50.00 per page</li>
                          <li>Fully accomplished Clerance & Request Form from Accounting and Billing Office</li>
                          <li>1 Documentary Stamp (Violet)</li>
                          <li>Passport Size & White Background (Formal Attire)</li>
                          <li>For Board examination purposes (refer to PRC LERIS required picture)</li>
                          <li>Verification Form (for international purposes) (ex. ICES, CGFNS, WES, NNAS, NCLEX and etc.)</li>
                          <li>For those with copies of their OTR already kindly send us scanned copy of your OTR</li>
                          <li>Return Slip of Honorable Dismissal (for transferee/TOR copy for other school)</li>
    
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <strong> Diploma Renewal </strong>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier's office - ₱ 100.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                        <li>1 Documentary Stamp (Violet)</li>
                        <li>Duly notarized affidavit</li>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <strong> Honorable Dismissal </strong>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier's office - ₱ 30.00</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                        <li>1 Documentary Stamp (Violet)</li>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <strong> Authentication </strong>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Clear copy of documents to be authenticated</li>
                        <li>Receipt of Payment from Cashier’s office – ₱ 10.00 per page</li>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <strong> Authentication, Certification & Verification </strong>
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office</li>
                        <li>Certification fee – ₱ 30.00</li>
                        <li>CAV fee – ₱ 40.00</li>
                        <li>Authentication fee – ₱ 10.00 per page</li>
                        <li>Clear copy of documents (OTR & Diploma) to be authenticated</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                        <li>1 Documentary Stamp (Violet)</li>
                        <li>Long Size Brown Envelope & Long Size White Mailing Envelope</li>
                          
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <strong> Certification of Grades </strong>
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per Semester or per School Year</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <strong> Certification of Earned Units </strong>
                      </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>For those with copies of their OTR already kindly send us scanned copy of your OTR</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      <strong> Certification General Weighted Average </strong>
                      </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00  per copy</li>
                        <li>For those with copies of their OTR already kindly send us scanned copy of your OTR</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      <strong> Certification as Graduate </strong>
                      </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      <strong> Certification as Currently Enrolled </strong>
                      </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      <strong> Certification of Enrollment </strong>
                      </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwelve">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      <strong> Certification as Graduating Student </strong>
                      </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThirteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      <strong> Adding/Dropping of Subjects </strong>
                      </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 15.00 per subject</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFourteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                      <strong> School Grading System </strong>
                      </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Receipt of Payment from Cashier’s office – ₱ 30.00 per copy
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFifteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                      <strong> PGO Verification Slip </strong>
                      </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSixteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                      <strong> Certification of English as a Medium of Instruction </strong>
                      </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeventeen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                      <strong> Certification as Latin Honor </strong>
                      </button>
                    </h2>
                    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEighteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                      <strong> Certification as Completed Academic Requirements </strong>
                      </button>
                    </h2>
                    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNineteen">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                      <strong> Certification as Bonafide Student </strong>
                      </button>
                    </h2>
                    <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwenty">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                      <strong> Certification GSIS Educational Subsidy Program </strong>
                      </button>
                    </h2>
                    <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwenty-One">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty-One" aria-expanded="false" aria-controls="collapseTwenty-One">
                      <strong> Certification as Has been a Student </strong>
                      </button>
                    </h2>
                    <div id="collapseTwenty-One" class="accordion-collapse collapse" aria-labelledby="headingTwenty-One" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <li>Receipt of Payment from Cashier’s office – ₱ 30.00 per copy</li>
                        <li>Fully accomplished Clearance & Request Form from Accounting and Billing office</li>
                      </div>
                    </div>
                  </div>
                </div><!-- End Default Accordion Example -->
  
              </div>
            </div>
  
          
          </div>

      </section>

</x-layout>