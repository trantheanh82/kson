<div class="request-call-three-area bg-primary">
            <div class="request-form-wrapper">
                <div class="request-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="form-left">
                                    <?=$content?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <form id="request-form" class="request-form-select" novalidate="true">
                                    <fieldset>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="<?=lang("Name*")?>" class="form-control" name="name" id="form-name" data-error="<?=lang("Name field is required")?>" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="email" placeholder="<?=lang("Email*")?>" class="form-control" name="email" id="form-email" data-error="<?=lang("Email field is required")?>" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="<?=lang("Phone*")?>" class="form-control" name="phone" id="form-phone" data-error="<?=lang("Phone field is required")?>" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="<?=lang("I Would Like To Discuss")?>" class="form-control" name="select" id="form-select">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="default-big-btn disabled"><?=lang("Send Request")?></button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                            <div class="form-response"></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
