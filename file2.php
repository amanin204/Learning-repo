
// Java program to convert
// Octal number to Binary
public class OctalToBinary {

    // function to convert octal number
    // to its binary equivalent value
    public static int converter(int octalValue)
    {

        // declaring all variable
        // to store the intermediate results
        int i = 0;
        int decimalValue = 0;
        int binaryValue = 0;

        // converting octal number
        // into its decimal equivalent
        while (octalValue != 0) {
            decimalValue
                += (octalValue % 10) * Math.pow(8, i);
            ++i;
            octalValue /= 10;
        }

        i = 1;

        // converting generated decimal number
        // to its binary equivalent
        while (decimalValue != 0) {
            binaryValue += (decimalValue % 2) * i;
            decimalValue /= 2;
            i *= 10;
        }

        // returning the final result
        return binaryValue;
    }

    // Driver code
    public static void main(String[] args)
    {

        System.out.println("Octal to Binary Conversion\n");

        // octal number which is to be converted
        int octalNumber = 315;
        System.out.println("Octal number: " + octalNumber);

        // calling the converter method and
        // storing the result in a string variable
        int result = converter(octalNumber);

        // printing the binary equivalent value
        System.out.println("Binary equivalent value is: "
                           + result);
    }
}
