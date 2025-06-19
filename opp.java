
// Java program to convert
// Octal number to Binary

class OctalToBinary {

    // function to convert octal number
    // to its binary equivalent value
    static String converter(String octalValue)
    {

        // integer variable to iterate
        // the input octal string
        int i = 0;

        // string to store the result
        String binaryValue = "";

        // iterating the complete length
        // of octal string and assigning
        // the equivalent binary value
        // for each octal digit
        while (i < octalValue.length()) {

            // storing character according
            // to the number of iteration
            char c = octalValue.charAt((int)i);

            // switch case to check all
            // possible 8 conditions
            switch (c) {
            case '0':
                binaryValue += "000";
                break;
            case '1':
                binaryValue += "001";
                break;
            case '2':
                binaryValue += "010";
                break;
            case '3':
                binaryValue += "011";
                break;
            case '4':
                binaryValue += "100";
                break;
            case '5':
                binaryValue += "101";
                break;
            case '6':
                binaryValue += "110";
                break;
            case '7':
                binaryValue += "111";
                break;
            default:
                System.out.println(
                    "\nInvalid Octal Digit "
                    + octalValue.charAt((int)i));
                break;
            }
            i++;
        }

        // returning the final result
        return binaryValue;
    }
