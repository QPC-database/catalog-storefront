<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Metadata;

class Catalog
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0afd370a0d636174616c6f672e70726f746f12226d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f22fb0e0a0750" .
            "726f64756374120a0a02696418012001280912180a106174747269627574" .
            "655f7365745f696418022001280912130a0b6861735f6f7074696f6e7318" .
            "032001280812120a0a637265617465645f617418052001280912120a0a75" .
            "7064617465645f6174180620012809120b0a03736b75180720012809120f" .
            "0a07747970655f6964180820012809120e0a067374617475731809200128" .
            "0912140a0c73746f636b5f737461747573180a20012809120c0a046e616d" .
            "6518112001280912130a0b6465736372697074696f6e1812200128091219" .
            "0a1173686f72745f6465736372697074696f6e181320012809120f0a0775" .
            "726c5f6b657918142001280912140a0c7461785f636c6173735f6964181c" .
            "20012809120e0a06776569676874181d2001280212380a05696d61676518" .
            "1f2001280b32292e6d6167656e746f2e636174616c6f6753746f72656672" .
            "6f6e744170692e70726f746f2e496d616765123e0a0b736d616c6c5f696d" .
            "61676518202001280b32292e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e496d616765123c0a097468756d" .
            "626e61696c18212001280b32292e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e496d61676512140a0c7377" .
            "617463685f696d616765182220012809124b0a0d6d656469615f67616c6c" .
            "65727918232003280b32342e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e4d6564696147616c6c65727949" .
            "74656d12120a0a7669736962696c69747918252001280912550a1264796e" .
            "616d69635f6174747269627574657318322003280b32392e6d6167656e74" .
            "6f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e44" .
            "796e616d696341747472696275746556616c756512180a106d6574615f64" .
            "65736372697074696f6e18162001280912140a0c6d6574615f6b6579776f" .
            "726418172001280912120a0a6d6574615f7469746c651818200128091212" .
            "0a0a63617465676f7269657318192003280912180a107265717569726564" .
            "5f6f7074696f6e7318462001280912120a0a637265617465645f696e184a" .
            "2001280912120a0a757064617465645f696e184b2001280912210a197175" .
            "616e746974795f616e645f73746f636b5f737461747573184c2001280912" .
            "190a116f7074696f6e735f636f6e7461696e6572184d2001280912260a1e" .
            "6d7372705f646973706c61795f61637475616c5f70726963655f74797065" .
            "184e2001280912150a0d69735f72657475726e61626c65184f2001280912" .
            "120a0a75726c5f737566666978185020012809123b0a076f7074696f6e73" .
            "18512003280b322a2e6d6167656e746f2e636174616c6f6753746f726566" .
            "726f6e744170692e70726f746f2e4f7074696f6e12440a0c75726c5f7265" .
            "77726974657318522003280b322e2e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e55726c52657772697465" .
            "123d0a0876617269616e747318532003280b322b2e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e56617269" .
            "616e7412540a14636f6e666967757261626c655f6f7074696f6e73185420" .
            "03280b32362e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e436f6e666967757261626c654f7074696f6e12" .
            "1e0a16636f756e7472795f6f665f6d616e75666163747572651855200128" .
            "09121e0a16676966745f6d6573736167655f617661696c61626c65185620" .
            "01280812150a0d7370656369616c5f707269636518572001280212190a11" .
            "7370656369616c5f66726f6d5f6461746518582001280912170a0f737065" .
            "6369616c5f746f5f6461746518592001280912460a0d70726f647563745f" .
            "6c696e6b73185a2003280b322f2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e50726f647563744c696e6b" .
            "12150a0d63616e6f6e6963616c5f75726c185b2001280912190a11736869" .
            "705f62756e646c655f6974656d73185c2001280912160a0e64796e616d69" .
            "635f776569676874185d2001280812130a0b64796e616d69635f736b7518" .
            "5e2001280812150a0d64796e616d69635f7072696365185f200128081212" .
            "0a0a70726963655f76696577186020012809123d0a056974656d73186120" .
            "03280b322e2e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e42756e646c654974656d12220a1a6c696e6b73" .
            "5f7075726368617365645f73657061726174656c7918622001280812130a" .
            "0b6c696e6b735f7469746c6518632001280912580a1a646f776e6c6f6164" .
            "61626c655f70726f647563745f6c696e6b7318642003280b32342e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e446f776e6c6f616461626c654c696e6b125c0a1c646f776e6c6f6164" .
            "61626c655f70726f647563745f73616d706c657318652003280b32362e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e446f776e6c6f616461626c6553616d706c6522ec010a10446f77" .
            "6e6c6f616461626c654c696e6b12120a0a73616d706c655f75726c180120" .
            "012809120d0a057469746c6518022001280912120a0a736f72745f6f7264" .
            "657218032001280512130a0b73616d706c655f7479706518042001280912" .
            "130a0b73616d706c655f66696c65180520012809120f0a076c696e6b5f69" .
            "64180620012805120d0a05707269636518072001280212110a096c696e6b" .
            "5f7479706518082001280912140a0c69735f736861726561626c65180920" .
            "012808121b0a136e756d6265725f6f665f646f776e6c6f616473180a2001" .
            "280512110a09656e746974795f6964180b200128092288010a12446f776e" .
            "6c6f616461626c6553616d706c6512120a0a73616d706c655f75726c1801" .
            "20012809120d0a057469746c6518022001280912120a0a736f72745f6f72" .
            "64657218032001280512130a0b73616d706c655f74797065180420012809" .
            "12130a0b73616d706c655f66696c6518052001280912110a09656e746974" .
            "795f696418062001280922b4010a0a42756e646c654974656d12110a096f" .
            "7074696f6e5f6964180120012809120d0a057469746c6518022001280912" .
            "100a087265717569726564180320012808120c0a04747970651804200128" .
            "0912100a08706f736974696f6e180520012805120b0a03736b7518062001" .
            "280912450a076f7074696f6e7318072003280b32342e6d6167656e746f2e" .
            "636174616c6f6753746f726566726f6e744170692e70726f746f2e42756e" .
            "646c654974656d4f7074696f6e22b8010a1042756e646c654974656d4f70" .
            "74696f6e120a0a02696418012001280912100a087175616e746974791802" .
            "2001280212120a0a69735f64656661756c74180320012808120d0a057072" .
            "69636518042001280212120a0a70726963655f7479706518052001280912" .
            "1b0a1363616e5f6368616e67655f7175616e74697479180620012808120d" .
            "0a056c6162656c18072001280912110a09656e746974795f696418082001" .
            "280912100a08706f736974696f6e18092001280522b3010a0b50726f6475" .
            "63744c696e6b121a0a126c696e6b65645f70726f647563745f736b751801" .
            "20012809120f0a07747970655f6964180220012809121b0a136c696e6b65" .
            "645f70726f647563745f7479706518032001280912140a0c6c696e6b5f74" .
            "7970655f696418042001280912100a08706f736974696f6e180520012805" .
            "120b0a03736b7518062001280912120a0a70726f647563745f6964180720" .
            "01280912110a096c696e6b5f7479706518082001280922f5030a064f7074" .
            "696f6e12110a096f7074696f6e5f696418012001280912120a0a70726f64" .
            "7563745f6964180220012809120c0a047479706518032001280912120a0a" .
            "69735f72657175697265180420012809120b0a03736b7518052001280912" .
            "160a0e6d61785f6368617261637465727318062001280912160a0e66696c" .
            "655f657874656e73696f6e18072001280912140a0c696d6167655f73697a" .
            "655f7818082001280912140a0c696d6167655f73697a655f791809200128" .
            "0912120a0a736f72745f6f72646572180a2001280912150a0d6465666175" .
            "6c745f7469746c65180b2001280912130a0b73746f72655f7469746c6518" .
            "0c20012809120d0a057469746c65180d2001280912150a0d64656661756c" .
            "745f7072696365180e20012809121a0a1264656661756c745f7072696365" .
            "5f74797065180f2001280912130a0b73746f72655f707269636518102001" .
            "280912180a1073746f72655f70726963655f74797065181120012809120d" .
            "0a05707269636518122001280912120a0a70726963655f74797065181320" .
            "01280912100a08726571756972656418142001280912130a0b70726f6475" .
            "63745f736b75181520012809123e0a0576616c756518162003280b322f2e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e4f7074696f6e56616c756522ab030a0b4f7074696f6e56616c" .
            "756512110a096f7074696f6e5f696418012001280912120a0a70726f6475" .
            "63745f6964180220012809120c0a047479706518032001280912120a0a69" .
            "735f72657175697265180420012809120b0a03736b751805200128091216" .
            "0a0e6d61785f6368617261637465727318062001280912160a0e66696c65" .
            "5f657874656e73696f6e18072001280912140a0c696d6167655f73697a65" .
            "5f7818082001280912140a0c696d6167655f73697a655f79180920012809" .
            "12120a0a736f72745f6f72646572180a2001280912150a0d64656661756c" .
            "745f7469746c65180b2001280912130a0b73746f72655f7469746c65180c" .
            "20012809120d0a057469746c65180d2001280912150a0d64656661756c74" .
            "5f7072696365180e20012809121a0a1264656661756c745f70726963655f" .
            "74797065180f2001280912130a0b73746f72655f70726963651810200128" .
            "0912180a1073746f72655f70726963655f74797065181120012809120d0a" .
            "05707269636518122001280912120a0a70726963655f7479706518132001" .
            "280912160a0e6f7074696f6e5f747970655f696418142001280922e5010a" .
            "12436f6e666967757261626c654f7074696f6e120a0a0269641801200128" .
            "09120d0a056c6162656c18022001280912100a08706f736974696f6e1803" .
            "2001280912130a0b7573655f64656661756c7418042001280912120a0a70" .
            "726f647563745f696418052001280912160a0e6174747269627574655f63" .
            "6f646518062001280912140a0c6174747269627574655f69641807200128" .
            "09124b0a0676616c75657318082003280b323b2e6d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f2e436f6e6669" .
            "67757261626c654f7074696f6e56616c756522ae010a17436f6e66696775" .
            "7261626c654f7074696f6e56616c756512130a0b76616c75655f696e6465" .
            "78180120012809120d0a056c6162656c18022001280912150a0d64656661" .
            "756c745f6c6162656c18032001280912130a0b73746f72655f6c6162656c" .
            "18042001280912190a117573655f64656661756c745f76616c7565180520" .
            "01280912140a0c6174747269627574655f696418062001280912120a0a70" .
            "726f647563745f696418072001280922640a0756617269616e74120f0a07" .
            "70726f6475637418012001280912480a0a61747472696275746573180220" .
            "03280b32342e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e56617269616e7441747472696275746522440a" .
            "1056617269616e74417474726962757465120d0a056c6162656c18012001" .
            "2809120c0a04636f646518022001280912130a0b76616c75655f696e6465" .
            "7818032001280922660a0a55726c52657772697465120b0a0375726c1801" .
            "20012809124b0a0a706172616d657465727318022003280b32372e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e55726c52657772697465506172616d6574657222320a1355726c5265" .
            "7772697465506172616d65746572120c0a046e616d65180120012809120d" .
            "0a0576616c756518022001280922260a084b657956616c7565120b0a036b" .
            "6579180120012809120d0a0576616c756518022001280922340a1544796e" .
            "616d696341747472696275746556616c7565120c0a04636f646518012001" .
            "2809120d0a0576616c75651802200128092296010a104d6564696147616c" .
            "6c6572794974656d120b0a0375726c180120012809120d0a056c6162656c" .
            "18022001280912120a0a6d656469615f7479706518032001280912100a08" .
            "706f736974696f6e18042001280512400a0d766964656f5f636f6e74656e" .
            "7418052001280b32292e6d6167656e746f2e636174616c6f6753746f7265" .
            "66726f6e744170692e70726f746f2e566964656f228e010a05566964656f" .
            "12160a0e766964656f5f70726f766964657218012001280912110a097669" .
            "64656f5f75726c18022001280912130a0b766964656f5f7469746c651803" .
            "2001280912190a11766964656f5f6465736372697074696f6e1804200128" .
            "0912160a0e766964656f5f6d6574616461746118052001280912120a0a6d" .
            "656469615f7479706518062001280922230a05496d616765120b0a037572" .
            "6c180120012809120d0a056c6162656c18022001280922490a1250726f64" .
            "7563747347657452657175657374120b0a03696473180120032809120d0a" .
            "0573746f726518022001280912170a0f6174747269627574655f636f6465" .
            "73180320032809224f0a1150726f6475637473476574526573756c74123a" .
            "0a056974656d7318012003280b322b2e6d6167656e746f2e636174616c6f" .
            "6753746f726566726f6e744170692e70726f746f2e50726f6475637422a3" .
            "010a15496d706f727450726f647563747352657175657374123d0a087072" .
            "6f647563747318012003280b322b2e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e50726f64756374120d0a" .
            "0573746f7265180220012809123c0a06706172616d7318062001280b322c" .
            "2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e" .
            "70726f746f2e4b657956616c756522390a16496d706f727450726f647563" .
            "7473526573706f6e7365120e0a06737461747573180120012808120f0a07" .
            "6d65737361676518022001280922a8010a17496d706f727443617465676f" .
            "726965735265717565737412400a0a63617465676f726965731801200328" .
            "0b322c2e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e43617465676f7279120d0a0573746f726518022001" .
            "2809123c0a06706172616d7318062001280b322c2e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e4b657956" .
            "616c7565223b0a18496d706f727443617465676f72696573526573706f6e" .
            "7365120e0a06737461747573180120012808120f0a076d65737361676518" .
            "022001280922ef040a0843617465676f7279120a0a026964180120012809" .
            "120c0a047061746818022001280912100a08706f736974696f6e18032001" .
            "2805120d0a056c6576656c18042001280512160a0e6368696c6472656e5f" .
            "636f756e74180520012805120c0a046e616d6518062001280912140a0c64" .
            "6973706c61795f6d6f646518072001280912170a0f64656661756c745f73" .
            "6f72745f6279180820012809120f0a0775726c5f6b657918092001280912" .
            "100a0875726c5f70617468180a2001280912110a0969735f616374697665" .
            "180b2001280812110a0969735f616e63686f72180c2001280812170a0f69" .
            "6e636c7564655f696e5f6d656e75180d2001280812190a11617661696c61" .
            "626c655f736f72745f6279180e2003280912430a0b62726561646372756d" .
            "6273180f2003280b322e2e6d6167656e746f2e636174616c6f6753746f72" .
            "6566726f6e744170692e70726f746f2e42726561646372756d6212130a0b" .
            "6465736372697074696f6e18102001280912150a0d63616e6f6e6963616c" .
            "5f75726c18112001280912150a0d70726f647563745f636f756e74181220" .
            "01280312100a086368696c6472656e181320032809120d0a05696d616765" .
            "18142001280912110a09706172656e745f696418152001280912120a0a6d" .
            "6574615f7469746c6518162001280912180a106d6574615f646573637269" .
            "7074696f6e18172001280912150a0d6d6574615f6b6579776f7264731818" .
            "2001280912550a1264796e616d69635f6174747269627574657318322003" .
            "280b32392e6d6167656e746f2e636174616c6f6753746f726566726f6e74" .
            "4170692e70726f746f2e44796e616d696341747472696275746556616c75" .
            "652285010a0a42726561646372756d6212130a0b63617465676f72795f69" .
            "6418012001280912150a0d63617465676f72795f6e616d65180220012809" .
            "12160a0e63617465676f72795f6c6576656c18032001280512180a106361" .
            "7465676f72795f75726c5f6b657918042001280912190a1163617465676f" .
            "72795f75726c5f70617468180520012809225a0a1443617465676f726965" .
            "7347657452657175657374120b0a03696473180120032809120d0a056c65" .
            "76656c180220012805120d0a0573746f726518032001280912170a0f6174" .
            "747269627574655f636f64657318042003280922540a1543617465676f72" .
            "696573476574526573706f6e7365123b0a056974656d7318012003280b32" .
            "2c2e6d6167656e746f2e636174616c6f6753746f726566726f6e74417069" .
            "2e70726f746f2e43617465676f727932b0040a07436174616c6f67127e0a" .
            "0b47657450726f647563747312362e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e50726f64756374734765" .
            "74526571756573741a352e6d6167656e746f2e636174616c6f6753746f72" .
            "6566726f6e744170692e70726f746f2e50726f6475637473476574526573" .
            "756c7422001289010a0e496d706f727450726f647563747312392e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e496d706f727450726f6475637473526571756573741a3a2e6d616765" .
            "6e746f2e636174616c6f6753746f726566726f6e744170692e70726f746f" .
            "2e496d706f727450726f6475637473526573706f6e73652200128f010a10" .
            "496d706f727443617465676f72696573123b2e6d6167656e746f2e636174" .
            "616c6f6753746f726566726f6e744170692e70726f746f2e496d706f7274" .
            "43617465676f72696573526571756573741a3c2e6d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f2e496d706f72" .
            "7443617465676f72696573526573706f6e736522001286010a0d47657443" .
            "617465676f7269657312382e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e43617465676f72696573476574" .
            "526571756573741a392e6d6167656e746f2e636174616c6f6753746f7265" .
            "66726f6e744170692e70726f746f2e43617465676f726965734765745265" .
            "73706f6e736522004228e202254d6167656e746f5c436174616c6f675374" .
            "6f726566726f6e744170695c4d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
