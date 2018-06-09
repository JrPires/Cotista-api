<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 05/06/2018
 * Time: 13:47
 */

class SerializerService
{
    /**
     * @var JMS\Serializer\Serializer
     */
    private $serializer;

    /**
     * SerializerService constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function converter($json, $tipo)
    {
        try{
            return $this->serializer->deserialize($json, $tipo, 'json');
            dump($usuario); die;
        }catch (\Exception $exception){
            dump($exception->getMessage()); die;
        }
    }
    public function toJsonByGroups($data, array $groups = ['default'])
    {
        return $this->serializer->serialize(
            $data,
            'json',
            SerializationContext::create()->setGroups($groups));

    }


}