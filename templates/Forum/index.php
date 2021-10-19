<?php
/**
 * @var App\View\AppView $this
 * @var \Cake\Datasource\ResultSetInterface $questions
 */
?>
<div>
    <div class="p-4 mb-2">
        <div class="row">
            <div class="col-md-9"><h2><?php echo 'Welcome to QA Forum'?></h2></div>
            <div>
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Visitors',
                    'action' => 'login'
                ])?>" type="button" class="ml-lg-2 btn btn-sm btn-outline-primary float-right">Login</a>
            </div>
            <div>
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Visitors',
                    'action' => 'askQuestion'
                ])?>" type="button" class="ml-lg-2 btn btn-sm btn-outline-primary float-right">Your Question ?</a>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <?php if ($questions->isEmpty()) { ?>
            <div class="card">
                <div class="card-body">
                    <span>No questions are found</span></div>
                </div>
            </div>
        <?php } else {?>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                           <h5>Categories</h5>
                            <div class="fm-menu">
                                <div class="list-group list-group-flush">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="fm-search mb-4">
                                <?php echo $this->Form->create(null, [
                                    'type' => 'GET',
                                    'templates' => [
                                        'inputContainer' => '{{content}}'
                                    ],
                                    'valueSources' => ['query']
                                ]); ?>
                                <?php echo $this->getRequest()->getQuery("status") ? $this->Form->hidden('status') : null; ?>
                                <?php echo $this->getRequest()->getQuery("limit") ? $this->Form->hidden('limit') : null; ?>
                                <div class="mb-0">
                                    <div class="input-group">
                                        <?php echo $this->Form->control('q', [
                                            'label' => false,
                                            'class' => 'form-control',
                                            'placeholder' => __("Search questions and answers...")
                                        ]) ?>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $this->Form->end(); ?>
                            </div>
                            <?php /** @var \App\Model\Entity\Question $ques */
                            foreach ($questions as $ques) { ?>
                            <div class="card w-100 border mb-4">
                                <div class="card-body mb-4">
                                    <div class="mb-2 tx-13 tx-spacing-2">
                                        <span class="font-weight-bold mb-1"><?php echo 'Q. '.$ques->title ?></span>
                                        <div class="mb-2"><?php echo $ques->description ?></div>
                                        <div>
                                            <span class="font-weight-bold mb-1"><?php echo 'A: '?></span>
                                            <?php ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

