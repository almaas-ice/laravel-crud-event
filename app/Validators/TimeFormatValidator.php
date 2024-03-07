

class TimeFormatValidator implements ValidatorInterface
{
    public function validate($attribute, $value, array $parameters): bool
    {
        $regex = '/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/';
        return preg_match($regex, $value) === 1;
    }
}