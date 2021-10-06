<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $hidden;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body', 'hidden'], 'required', 'message' => 'Заполните поле'],
            [['subject','name','email'], 'string', 'length' => [0, 255]],
            ['body', 'string', 'length' => [0, 5000]],
            ['email', 'email', 'message' => 'Невалидная почта'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Почта',
            'subject' => 'Тема',
            'body' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['noReplyEmail'] => 'Web Academy'])
            ->setSubject($this->subject)
            ->setTextBody($this->body . ' Author-email: ' . $this->email)
            ->send();
    }
}
