<?php

class TelegramBotHelper{

    //message fields
    public $message;
    public $date;
    public $text;
    public $caption;
    public $chat_id;
    public $user_name;
    public $user_id;
    public $first_name;
    public $message_id;
    public $join_in_group;
    public $new_member_id;
    public $new_member_name;
    public $new_member_first_name;
    public $group_name;
    public $chat_type;
    public $left_member_data;
    public $left_member_id;
    public $left_member_name;
    public $left_first_name;

    //callback_query fields
    public $callback_query;
    public $callback_query_data;
    public $callback_id;
    public $callback_from;
    public $callback_user_id;
    public $callback_from_is_bot;
    public $callback_from_first_name;
    public $callback_from_username;
    public $callback_message;
    public $callback_message_id;
    public $callback_message_text;
    public $callback_message_from;
    public $callback_message_chat;
    public $callback_message_chat_title;
    public $callback_message_chat_id;
    public $inline_message_id;
    //callback reply fields
    public $callback_reply_to_message;
    public $callback_reply_message_id;
    public $callback_reply_from;
    public $callback_reply_from_id;
    public $callback_reply_from_user_name;
    public $callback_reply_from_first_name;
    public $callback_reply_from_is_bot;
    public $callback_reply_chat;
    public $callback_reply_chat_id;
    public $callback_reply_chat_first_name;
    public $callback_reply_chat_user_name;
    public $callback_reply_chat_type;
    public $callback_reply_text;

    //reply fields
    public $reply_to_message;
    public $reply_message_id;
    public $reply_from;
    public $reply_from_id;
    public $reply_from_user_name;
    public $reply_from_first_name;
    public $reply_from_is_bot;
    public $reply_chat;
    public $reply_chat_id;
    public $reply_chat_first_name;
    public $reply_chat_user_name;
    public $reply_chat_type;
    public $reply_text;

    function getTData($tData)
    {
        //chat date
        $this->message                =   $tData->message;
        $this->date                   =   $this->message->date;
        $this->text                   =   $this->message->text;
        $this->caption                =   $this->message->caption;
        $this->chat_id                =   $this->message->chat->id;
        $this->user_name              =   $this->message->from->username;
        $this->user_id                =   $this->message->from->id;
        $this->first_name             =   $this->message->from->first_name;
        $this->message_id             =   $this->message->message_id;
        $this->join_in_group          =   $this->message->new_chat_participant;
        $this->new_member_id          =   $this->join_in_group->id;
        $this->new_member_name        =   $this->join_in_group->username;
        $this->new_member_first_name  =   $this->join_in_group->first_name;
        $this->group_name             =   $this->message->chat->title;
        $this->chat_type              =   $this->message->chat->type;
        $this->left_member_data       =   $this->message->left_chat_participant;
        $this->left_member_id         =   $this->left_member_data->id;
        $this->left_member_name       =   $this->left_member_data->name;
        $this->left_first_name        =   $this->left_member_data->first_name;

        //reply_to_message
        $this->reply_to_message     =   $this->message->reply_to_message;
        $this->reply_message_id     =   $this->reply_to_message->message_id;
        $this->reply_from           =   $this->reply_to_message->from;
        $this->reply_from_id        =   $this->reply_from->id;
        $this->reply_from_user_name =   $this->reply_from->user_name;
        $this->reply_from_first_name=   $this->reply_from->first_nam;
        $this->reply_from_is_bot    =   $this->reply_from->is_bot;
        $this->reply_chat           =   $this->reply_to_message->chat;
        $this->reply_chat_id        =   $this->reply_chat->id;
        $this->reply_chat_first_name=   $this->reply_chat->first_name;
        $this->reply_chat_user_name =   $this->reply_chat->user_name;
        $this->reply_chat_type      =   $this->reply_chat->type;
        $this->reply_text           =   $this->reply_to_message->text;
    
        //callback query action
        $this->callback_query                 =   $tData->callback_query;
        $this->callback_query_data            =   $this->callback_query->data;
        $this->callback_id                    =   $this->callback_query->id;
        $this->callback_from                  =   $this->callback_query->from;
        $this->callback_user_id               =   $this->callback_from->id;
        $this->callback_from_is_bot           =   $this->callback_from->is_bot;
        $this->callback_from_first_name       =   $this->callback_from->first_name;
        $this->callback_from_username         =   $this->callback_from->username;
        $this->callback_message               =   $this->callback_query->message;
        $this->callback_message_id            =   $this->callback_message->message_id;
        $this->callback_message_text          =   $this->callback_message->text;
        $this->callback_message_from          =   $this->callback_message->from;
        $this->callback_message_chat          =   $this->callback_message->chat;
        $this->callback_message_chat_title    =   $this->callback_message_chat->title;
        $this->callback_message_chat_id       =   $this->callback_message_chat->id;

        //callback reply
        $this->callback_reply_to_message        =   $this->callback_query->message->reply_to_message;
        $this->callback_reply_message_id        =   $this->callback_reply_to_message->message_id;
        $this->callback_reply_from              =   $this->callback_reply_to_message->from;
        $this->callback_reply_from_id           =   $this->callback_reply_from->id;
        $this->callback_reply_from_user_name    =   $this->callback_reply_from->user_name;
        $this->callback_reply_from_first_name   =   $this->callback_reply_from->first_name;
        $this->callback_reply_from_is_bot       =   $this->callback_reply_from->is_bot;
        $this->callback_reply_chat              =   $this->callback_reply_to_message->chat;
        $this->callback_reply_chat_id           =   $this->callback_reply_chat->id;
        $this->callback_reply_chat_first_name   =   $this->callback_reply_chat->first_name;
        $this->callback_reply_chat_user_name    =   $this->callback_reply_chat->user_name;
        $this->callback_reply_chat_type         =   $this->callback_reply_chat->type;
        $this->callback_reply_text              =   $this->callback_reply_to_message->text;
    }

    //send Text Message
    function sendMessage($chat_id, $text, $parse_mode=null, $reply_message_id=null, $reply_markup=null)
    {
        $res = $this -> bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => $text,
            "parse_mode" => $parse_mode,
            "reply_to_message_id" => $reply_message_id,
            'reply_markup' => $reply_markup
        ]);
        return $res;
    }

    // bot function :
    function bot($method, $data=[])
    {
        $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_PROXY, "socks5h://127.0.0.1:10808");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($ch);

        curl_close($ch);
        
        return $result;
    }

}