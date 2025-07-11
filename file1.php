
// Java program to convert binary to octal
// using user-defined function

// Driver Class
class Geeks
{
    // function to convert binary number
    // to decimal number
    int binaryToDecimal(long binary)
    {
        // variable to store the converted
        // decimal number
        int decimalNumber = 0, i = 0;

        // loop to convert binary to decimal
        while (binary > 0) {

            // extracting every digit of the
            // binary and multiplying with
            // increasing powers of 2
            decimalNumber
                += Math.pow(2, i++) * (binary % 10);

            // dividing the number by 10
            // to remove the last digit
            binary /= 10;
        }

        // returning the converted decimal
        // number
        return decimalNumber;
    }

    // function to convert decimal number
    // to octal
    int decimalToOctal(long binary)
    {
        // variable to store the octal number
        int octalNumber = 0, i = 0;

        // variable to store the output
        // returned by the binaryToDecimal()
        int decimalNumber = binaryToDecimal(binary);

        // loop to convert decimal to octal
        while (decimalNumber != 0) {

            // extracting the remainder on
            // multiplying by 8 and
            // dividing that with increasing
            // powers of 10
            octalNumber += (decimalNumber % 8)
                           * ((int)Math.pow(10, i++));

            // removing the last digit by
            // dividing by 8
            decimalNumber /= 8;
        }

        // returning the converted octal number
        return octalNumber;
    }

    // Driver Code
    public static void main(String[] args)
    {
        // instantiating the class
        Geeks ob = new Geeks();

        // calling and printing the
        // decimalToOctal() function
        System.out.println(ob.decimalToOctal(1001001));
    }
}
