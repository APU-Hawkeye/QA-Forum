<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\AnswersTable;
use App\Model\Table\QuestionsTable;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/**
 * Class ForumController
 * @package App\Controller
 *
 * @property QuestionsTable $Questions
 * @property AnswersTable $Answers
 */
class ForumController extends AppController
{

    /**
     * @param EventInterface $event Event Instance
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $questions = TableRegistry::getTableLocator()->get('Questions');
        $this->Questions = $questions;
        $answers = TableRegistry::getTableLocator()->get('Answers');
        $this->Answers = $answers;
    }

    public function index()
    {
        $query = $this->Questions->find()->contain('Answers')->order([
            'Questions.modified' => 'DESC'
        ])->all();
        $this->set('titleForLayout', 'QA Forum');
        $this->set('questions', $query);
    }
}
