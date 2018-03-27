  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="contact-name" class="sr-only">Name</label>
        [text* your-name class:form-control class:input-lg id:contct-name placeholder"Your name"]
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
          <label for="contact-email" class="sr-only">Email</label>
          [email* your-email class:form-control class:input-lg id:contact-email placeholder"Your email"]
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
          <label for="contact-subject" class="sr-only">Subject</label>
          [text* your-subject class:form-control class:input-lg id:contact-subject placeholder"Your subject"]
      </div>
    </div>

    <div class="col-sm-12">
      <div class="form-group">
          <label for="contact-words" class="sr-only">Message</label>
          [textarea* your-message class:form-control class:input-lg id:contact-words x3 placeholder"You email"]
      </div>
    </div>

  </div> 
  [submit class:btn class:btn-info class:btn-lg class:pull-right "Get in touch"]